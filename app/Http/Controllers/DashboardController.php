<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('dashboard.index');
    }

    public function crmLogin()
    {
        $credentials = [
            'login' => config('main.crm_login'),
            'password' => config('main.crm_password'),
        ];

        return Http::post(config('main.crm_server') . '/auth', $credentials)->json();
    }

    /**
     * @throws \Throwable
     * @throws ConnectionException
     */
    public function crmData()
    {
        $credentials = session()->get('credentials');

        if (!$credentials) {
            $credentials = $this->crmLogin();
            session()->put('credentials', $credentials);
        }

        $debug = (bool)request()->input('debug', false);

        $response = Http::withOptions([
            'debug' => $debug,
        ])->withBody(json_encode($credentials))->get(config('main.crm_server') . '/widgets_json');

        if ($response->status() === 422) {
            $credentials = $this->crmLogin();
            session()->put('credentials', $credentials);
            $response = Http::withOptions([
                'debug' => $debug,
            ])->withBody(json_encode($credentials))->get(config('main.crm_server') . '/widgets_json');
        }

        if ($debug) {
            return $response->body();
        }

        if ($response->failed()) {
            $dateTime = now()->format('Y/m/d H:i:s');
            $message = [
                "[$dateTime]CRM URL: " . config('main.crm_server') . '/widgets_json',
                "[$dateTime]CREDENTIAL: " . json_encode($credentials, JSON_UNESCAPED_UNICODE, JSON_UNESCAPED_SLASHES),
                "[$dateTime]CRM server: " . $response->status() . " / Body: " . $response->body() . PHP_EOL . PHP_EOL
            ];
            return response(implode(PHP_EOL, $message), 500);
        }

        return response([
            'serverDate' => now()->format('Y-m-d H:i:s'),
            'crmData' => $response->json('widgets', []),
        ]);
    }
}
