<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

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

        $response = Http::withBody(json_encode($credentials))->get(config('main.crm_server') . '/widgets_json');

        if ($response->status() === 422) {
            $credentials = $this->crmLogin();
            session()->put('credentials', $credentials);
            $response = Http::withBody(json_encode($credentials))->get(config('main.crm_server') . '/widgets_json');
        }

        if ($response->failed()) {
            return response("CRM server: " . $response->status() . " / Body: " . $response->body(), 500);
        }

        return response([
            'serverDate' => now()->format('Y-m-d H:i:s'),
            'crmData' => $response->json('widgets', []),
        ]);
    }
}
