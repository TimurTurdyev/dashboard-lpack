<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
    <title>Dashboard</title>
    <base href="{{ asset('/') }}">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('dashboard/bootstrap.min.css') }}?ver={{ config('main.commit_hash') }}" rel="stylesheet">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter&family=Nunito+Sans&family=Rubik&family=DM+Sans&display=swap"
        rel="stylesheet">
    <!-- CHARTJS CSS -->
    {{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.css">--}}
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard/nice-select.min.css') }}?ver={{ config('main.commit_hash') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/main.css') }}?ver={{ config('main.commit_hash') }}">
</head>

<body>
<div class="wrapper">
    <!-- HEADER -->
    <section class="haider">
        <div class="container">
            <div class="haider__content">
                <button class="btn btn-light btn-sm" id="fill-screen">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none"
                         stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                        <path
                            d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none"
                         stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                         style="display: none;">
                        <path
                            d="M8 3v3a2 2 0 0 1-2 2H3m18 0h-3a2 2 0 0 1-2-2V3m0 18v-3a2 2 0 0 1 2-2h3M3 16h3a2 2 0 0 1 2 2v3"></path>
                    </svg>
                </button>
                <div class="me-auto">
                    Дата обновления данных:
                    <span id="server-date">{{ now()->format('Y-m-d H:i:s') }}</span>
                </div>
                <select id="global-interval" autocomplete="off">
                    <option value="1">1 минута</option>
                    <option value="3">3 минуты</option>
                    <option value="5">5 минут</option>
                    <option value="10">10 минут</option>
                    <option value="30">30 минут</option>
                </select>
                <div class="haider_name" id="haiderName">Чепурнов В.</div>
            </div>
        </div>
    </section>

    <!-- GENERAL DATA -->
    <section class="general_data">
        <div class="container">
            <div class="alert alert-danger" id="error" style="display: none;">
                <h3>Лог ошибок:</h3>
                <div style="max-height: 350px; overflow-y: scroll;">
                    <pre></pre>
                </div>
            </div>
            <div class="general_data_row">
                <!-- general_item -->
                <div class="general_item" data-id="f3bfb75a-0a56-11f1-a4a3-e848b8c82000">
                    <div class="top">
                        <img src="{{ asset('dashboard/images/user-active.png') }}?ver={{ config('main.commit_hash') }}"
                             alt="">
                        <div class="title">Потенциал</div>
                    </div>
                    <div class="bottom">
                        <div class="data" data-key="Value"></div>
                        <div class="quantity" data-key="Additionally"></div>
                    </div>
                </div>
                <!-- general_item -->
                <div class="general_item" data-id="7c9a6b48-0a5a-11f1-a4a3-e848b8c82000">
                    <div class="top">
                        <img src="{{ asset('dashboard/images/user-info.png') }}?ver={{ config('main.commit_hash') }}"
                             alt="">
                        <div class="title">Новый</div>
                    </div>
                    <div class="bottom">
                        <div class="data" data-key="Value"></div>
                        <div class="quantity" data-key="Additionally"></div>
                    </div>
                </div>
                <!-- general_item -->
                <div class=" general_item" data-id="8c43f4ae-0a5a-11f1-a4a3-e848b8c82000">
                    <div class="top">
                        <img src="{{ asset('dashboard/images/user-delete.png') }}?ver={{ config('main.commit_hash') }}"
                             alt="">
                        <div class="title">Активный</div>
                    </div>
                    <div class="bottom">
                        <div class="data" data-key="Value"></div>
                        <div class="quantity" data-key="Additionally"></div>
                    </div>
                </div>
                <!-- general_item -->
                <div class="general_item" data-id="71bb0515-0a5b-11f1-a4a3-e848b8c82000">
                    <div class="top">
                        <img src="{{ asset('dashboard/images/user-active.png') }}?ver={{ config('main.commit_hash') }}"
                             alt="">
                        <div class="title">Отток клиентов</div>
                    </div>
                    <div class="bottom">
                        <div class="data" data-key="Value"></div>
                        <div class="quantity" data-key="Additionally"></div>
                    </div>
                </div>
                <!-- general_item -->
                <div class="general_item" data-id="3085b4a7-0a5d-11f1-a4a3-e848b8c82000">
                    <div class="top">
                        <img src="{{ asset('dashboard/images/user-info.png') }}?ver={{ config('main.commit_hash') }}"
                             alt="">
                        <div class="title">Сумма по новым</div>
                    </div>
                    <div class="bottom">
                        <div class="data" data-key="Value"></div>
                        <div class="quantity" data-key="Additionally"></div>
                    </div>
                </div>
                <!-- general_item -->
                <div class=" general_item" data-id="e26688d2-0a61-11f1-a4a3-e848b8c82000">
                    <div class="top">
                        <img src="{{ asset('dashboard/images/user-delete.png') }}?ver={{ config('main.commit_hash') }}"
                             alt="">
                        <div class="title">Сумма по старым</div>
                    </div>
                    <div class="bottom">
                        <div class="data" data-key="Value"></div>
                        <div class="quantity" data-key="Additionally"></div>
                    </div>
                </div>
                <!-- general_item -->
                <div class="general_item" data-id="f50290e1-16c1-11f0-a462-e848b8c82000">
                    <div class="top">
                        <img
                            src="{{ asset('dashboard/images/general_data_icon1.png') }}?ver={{ config('main.commit_hash') }}"
                            alt="">
                        <div class="title">В воронке</div>
                    </div>
                    <div class="bottom">
                        <div class="data" data-key="Value"></div>
                        <div class="quantity" data-key="Additionally"></div>
                    </div>
                </div>
                <!-- general_item -->
                <div class="general_item" data-id="d1becadf-16c3-11f0-a462-e848b8c82000">
                    <div class="top">
                        <img
                            src="{{ asset('dashboard/images/general_data_icon2.png') }}?ver={{ config('main.commit_hash') }}"
                            alt="">
                        <div class="title">Закрыто</div>
                    </div>
                    <div class="bottom">
                        <div class="data" data-key="Value"></div>
                        <div class="quantity" data-key="Additionally"></div>
                    </div>
                </div>
                <!-- general_item -->
                <div class=" general_item" data-id="aa69d970-16c5-11f0-a462-e848b8c82000">
                    <div class="top">
                        <img
                            src="{{ asset('dashboard/images/general_data_icon3.png') }}?ver={{ config('main.commit_hash') }}"
                            alt="">
                        <div class="title">Выполнения плана, год</div>
                    </div>
                    <div class="bottom">
                        <div class="data" data-key="Value"></div>
                        <div class="quantity" data-key="Additionally"></div>
                    </div>
                </div>
                <!-- general_item -->
                <div class=" general_item" data-id="e865f505-16ce-11f0-a462-e848b8c82000">
                    <div class="top">
                        <img
                            src="{{ asset('dashboard/images/general_data_icon4.png') }}?ver={{ config('main.commit_hash') }}"
                            alt="">
                        <div class="title">Средний чек</div>
                    </div>
                    <div class="bottom">
                        <div class="data" data-key="Value"></div>
                        <div class="quantity" data-key="Additionally"></div>
                    </div>
                </div>
                <!-- general_item -->
                <div class=" general_item" data-id="27e22afc-16ca-11f0-a462-e848b8c82000">
                    <div class="top">
                        <img
                            src="{{ asset('dashboard/images/general_data_icon5.png') }}?ver={{ config('main.commit_hash') }}"
                            alt="">
                        <div class="title">Конверсия за год</div>
                    </div>
                    <div class="bottom">
                        <div class="data" data-key="Value"></div>
                        <div class="quantity" data-key="Additionally"></div>
                    </div>
                </div>
                <!-- general_item -->
                <div class="general_item" data-id="248ece99-16ce-11f0-a462-e848b8c82000">
                    <div class="top">
                        <img
                            src="{{ asset('dashboard/images/general_data_icon6.png') }}?ver={{ config('main.commit_hash') }}"
                            alt="">
                        <div class="title">Среднее время</div>
                    </div>
                    <div class="bottom">
                        <div class="data" data-key="Value"></div>
                        <div class="quantity" data-key="Additionally"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container tab-group">
            <ul class="nav nav-underline flex-nowrap overflow-x-auto mb-4">
                <li class="nav-item" data-id="e4854dd8-163e-11f0-a461-e848b8c82000">
                    <a class="nav-link text-nowrap active"
                       data-bs-toggle="tab" data-bs-target="#tab-pane1" type="button" role="tab"
                       aria-controls="tab-pane1" aria-selected="true"
                       href="#" data-key="Name">График 1</a>
                </li>
                <li class="nav-item" data-id="3ffd47f3-164c-11f0-a461-e848b8c82000">
                    <a class="nav-link text-nowrap"
                       data-bs-toggle="tab" data-bs-target="#tab-pane2" type="button" role="tab"
                       aria-controls="tab-pane2" aria-selected="false"
                       href="#" data-key="Name">График 2</a>
                </li>
                <li class="nav-item" data-id="2281f922-7e4a-11f0-a47c-e848b8c82000">
                    <a class="nav-link text-nowrap"
                       data-bs-toggle="tab" data-bs-target="#tab-pane3" type="button" role="tab"
                       aria-controls="tab-pane3" aria-selected="false"
                       href="#" data-key="Name">График 3</a>
                </li>
                <li class="nav-item" data-id="345e2812-16d3-11f0-a462-e848b8c82000">
                    <a class="nav-link text-nowrap"
                       data-bs-toggle="tab" data-bs-target="#tab-pane4" type="button" role="tab"
                       aria-controls="tab-pane3" aria-selected="false"
                       href="#" data-key="Name">График 4</a>
                </li>
                <li class="nav-item" data-id="97628348-9bcc-11f0-a485-e848b8c82000">
                    <a class="nav-link text-nowrap"
                       data-bs-toggle="tab" data-bs-target="#tab-pane5" type="button" role="tab"
                       aria-controls="tab-pane3" aria-selected="false"
                       href="#" data-key="Name">График 5</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="tab-pane1" role="tabpanel"
                     aria-labelledby="tab-1"
                     tabindex="0">
                    <!-- CHART SECTION -->
                    <div class="chart-section">
                        <div class="container-box" data-id="e4854dd8-163e-11f0-a461-e848b8c82000">
                            <div class="legend">
                                <div class="title" data-key="Name">График 1</div>
                                <div class="border"></div>
                                <div class="group">
                                    <div>
                                        <span class="dot this-year"></span>Этот год
                                    </div>
                                    <div>
                                        <span class="dot last-year"></span>Прошлый год
                                    </div>
                                    <div>
                                        <span class="dot last-year" style="background-color: #5856D6"></span>План
                                    </div>
                                </div>
                            </div>
                            <div class="chart-container">
                                <canvas id="salesChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-pane2" role="tabpanel"
                     aria-labelledby="tab-2"
                     tabindex="0">
                    <!-- BAR -->
                    <div class="bar">
                        <div class="container-box" data-id="3ffd47f3-164c-11f0-a461-e848b8c82000">
                            <div class="legend">
                                <div class="title" data-key="Name">График 2</div>
                                <div class="border"></div>
                                <div class="group">
                                    <div>
                                        <span class="dot last-year"></span>Этот год
                                    </div>
                                    <div>
                                        <span class="dot this-year"></span>Прошлый год
                                    </div>
                                </div>
                            </div>
                            <div class="chart-container">
                                <canvas id="myChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-pane3" role="tabpanel"
                     aria-labelledby="tab-3"
                     tabindex="0">
                    <!-- INCOME CHART -->
                    <div class="income_chart">
                        <div class="container-box" data-id="2281f922-7e4a-11f0-a47c-e848b8c82000">
                            <div class="legend_group">
                                <div class="legend">
                                    <div class="title" data-key="Name">График 3</div>
                                    <div class="border"></div>
                                    <div class="group">
                                        <div>
                                            <span class="dot this-year"></span>Теряем
                                        </div>

                                        <div>
                                            <span class="dot last-year "></span>Новые
                                        </div>
                                        <div>
                                            <span class="dot this-year" style="background-color: #00C7BE;"></span>Постоянные
                                        </div>

                                        <div>
                                            <span class="dot last-year" style="background-color: #5856D6"></span>Разовый
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chart-container">
                                <canvas id="profitChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-pane4" role="tabpanel"
                     aria-labelledby="tab-4"
                     tabindex="0">
                    <div class="mixed_charts">
                        <div class="chart_item" data-id="345e2812-16d3-11f0-a462-e848b8c82000">
                            <div class="title add" data-key="Name">Конверсия по месяцам</div>
                            <div class="chart-container">
                                <canvas id="myLineChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-pane5" role="tabpanel"
                     aria-labelledby="tab-5"
                     tabindex="0">
                    <div class="mixed_charts">
                        <div class="chart_item" data-id="97628348-9bcc-11f0-a485-e848b8c82000">
                            <div class="group">
                                <div class="title" data-key="Name">График 5</div>
                            </div>

                            <div class="chart-container">
                                <canvas id="invoiceChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CARD ITEM -->
    <section class="card_item">
        <div class="container">
            <div class="card_item_start">
                <div class="card" data-id="62af4de7-16d5-11f0-a462-e848b8c82000">
                    <div class="card_title">
                        <img
                            src="{{ asset('dashboard/images/card_title_img.svg') }}?ver={{ config('main.commit_hash') }}"
                            alt="">
                        <span data-key="Name">Создано счетов</span>
                    </div>
                    <div class="card_text">
                        <div class="left">
                            <span data-key="Value"></span>
                            <img data-key="indicator"
                                 src="{{ asset('dashboard/images/arrow-up.svg') }}?ver={{ config('main.commit_hash') }}"
                                 alt="">
                        </div>
                        <div class="right">
                            План<span data-key="Plan">?</span>
                        </div>
                    </div>
                    <div class="card_bottom">
                        <div class="left">Компания:<span data-key="Additionally">?</span></div>
                        <div class="right" data-key="Percent"></div>
                    </div>
                </div>
                <div class="card" data-id="c7a0b4cc-1ee4-11f0-a467-e848b8c82000">
                    <div class="card_title">
                        <img
                            src="{{ asset('dashboard/images/card_title_img2.svg') }}?ver={{ config('main.commit_hash') }}"
                            alt="">
                        <span data-key="Name">Сумма счетов</span>
                    </div>
                    <div class="card_text">
                        <div class="left"><span data-key="Value"></span>
                            <img data-key="indicator"
                                 src="{{ asset('dashboard/images/arrow-up.svg') }}?ver={{ config('main.commit_hash') }}"
                                 alt=""></div>
                        <div class="right">
                            План<span data-key="Plan">?</span>
                        </div>
                    </div>
                    <div class="card_bottom">
                        <div class="left">Компания:<span data-key="Additionally">?</span></div>
                        <div class="right" data-key="Percent"></div>
                    </div>
                </div>
                <div class="card" data-id="64a3b108-1ef4-11f0-a467-e848b8c82000">
                    <div class="card_title"><img
                            src="{{ asset('dashboard/images/card_title_img3.svg') }}?ver={{ config('main.commit_hash') }}"
                            alt="">
                        <span data-key="Name">Заявки</span>
                    </div>
                    <div class="card_text">
                        <div class="left"><span data-key="Value"></span>
                            <img data-key="indicator"
                                 src="{{ asset('dashboard/images/arrow-down.svg') }}?ver={{ config('main.commit_hash') }}"
                                 alt=""></div>
                        <div class="right ">
                            План<span data-key="Plan">?</span>
                        </div>
                    </div>
                    <div class="card_bottom">
                        <div class="left">Компания:<span data-key="Additionally">?</span></div>
                        <div class="right" data-key="Percent"></div>
                    </div>
                </div>
                <div class="card" data-id="8aa76cc0-1fb8-11f0-a467-e848b8c82000">
                    <div class="card_title"><img
                            src="{{ asset('dashboard/images/card_title_img4.svg') }}?ver={{ config('main.commit_hash') }}"
                            alt="">
                        <span data-key="Name">Конверсия (день)</span>
                    </div>
                    <div class="card_text">
                        <div class="left"><span data-key="Value"></span>
                            <img data-key="indicator"
                                 src="{{ asset('dashboard/images/arrow-down.svg') }}?ver={{ config('main.commit_hash') }}"
                                 alt=""></div>
                        <div class="right ">
                            План<span data-key="Plan">?</span>
                        </div>
                    </div>
                    <div class="card_bottom">
                        <div class="left">Компания:<span data-key="Additionally">?</span></div>
                        <div class="right" data-key="Percent"></div>
                    </div>
                </div>
                <div class="card" data-id="2fe11cf4-1fb5-11f0-a467-e848b8c82000">
                    <div class="card_title"><img
                            src="{{ asset('dashboard/images/card_title_img5.svg') }}?ver={{ config('main.commit_hash') }}"
                            alt="">
                        <span data-key="Name">Исходящие звонки</span>
                    </div>
                    <div class="card_text">
                        <div class="left"><span data-key="Value"></span>
                            <img data-key="indicator"
                                 src="{{ asset('dashboard/images/arrow-up.svg') }}?ver={{ config('main.commit_hash') }}"
                                 alt=""></div>
                        <div class="right">
                            План<span data-key="Plan">?</span>
                        </div>
                    </div>
                    <div class="card_bottom">
                        <div class="left">Компания:<span data-key="Additionally">?</span></div>
                        <div class="right" data-key="Percent"></div>
                    </div>
                </div>
                <div class="card" data-id="03974f0b-1fb6-11f0-a467-e848b8c82000">
                    <div class="card_title"><img
                            src="{{ asset('dashboard/images/card_title_img8.svg') }}?ver={{ config('main.commit_hash') }}"
                            alt="">
                        <span data-key="Name">Входящие звонки</span>
                    </div>
                    <div class="card_text">
                        <div class="left"><span data-key="Value"></span>
                            <img data-key="indicator"
                                 src="{{ asset('dashboard/images/arrow-up.svg') }}?ver={{ config('main.commit_hash') }}"
                                 alt=""></div>
                        <div class="right">
                            План<span data-key="Plan">?</span>
                        </div>
                    </div>
                    <div class="card_bottom">
                        <div class="left">Компания:<span data-key="Additionally">?</span></div>
                        <div class="right" data-key="Percent"></div>
                    </div>
                </div>
                <div class="card" data-id="7facd5ff-3735-11f0-a473-e848b8c82000">
                    <div class="card_title"><img
                            src="{{ asset('dashboard/images/card_title_img6.svg') }}?ver={{ config('main.commit_hash') }}"
                            alt="">
                        <span data-key="Name">Исходящие e-mails</span>
                    </div>
                    <div class="card_text">
                        <div class="left"><span data-key="Value"></span> <img
                                data-key="indicator"
                                src="{{ asset('dashboard/images/arrow-up.svg') }}?ver={{ config('main.commit_hash') }}"
                                alt=""></div>
                        <div class="right">
                            План<span data-key="Plan">?</span>
                        </div>
                    </div>
                    <div class="card_bottom">
                        <div class="left">Компания:<span data-key="Additionally">?</span></div>
                        <div class="right" data-key="Percent"></div>
                    </div>
                </div>
                <div class="card" data-id="91b2e448-1fb6-11f0-a467-e848b8c82000">
                    <div class="card_title"><img
                            src="{{ asset('dashboard/images/card_title_img7.svg') }}?ver={{ config('main.commit_hash') }}"
                            alt="">
                        <span data-key="Name">Сообщения в WhatsApp сегодня</span>
                    </div>
                    <div class="card_text">
                        <div class="left"><span data-key="Value"></span>
                            <img data-key="indicator"
                                 src="{{ asset('dashboard/images/arrow-up.svg') }}?ver={{ config('main.commit_hash') }}"
                                 alt=""></div>
                        <div class="right">
                            План<span data-key="Plan">?</span>
                        </div>
                    </div>
                    <div class="card_bottom">
                        <div class="left">Компания:<span data-key="Additionally">?</span></div>
                        <div class="right" data-key="Percent"></div>
                    </div>
                </div>
                <div class="card end progress-watch" data-id="659f6934-9c3a-11f0-a485-e848b8c82000">
                    <div class="card_title" data-key="Name">??? Прогресс за день</div>
                    <div class="card_text">
                        <div class="card_img bar-watch">
                            <img
                                src="{{ asset('dashboard/images/card_end_img.svg') }}?ver={{ config('main.commit_hash') }}"
                                alt="">
                            <img
                                src="{{ asset('dashboard/images/card_end_img_arrow.svg') }}?ver={{ config('main.commit_hash') }}"
                                alt="">
                        </div>
                        <div class="card_element bar-check">
                            <div>
                                <div class="ps-5 fs-4 mb-2">👎</div>
                                <div>
                                    <img
                                    src="{{ asset('dashboard/images/card_end_img_state0.svg') }}?ver={{ config('main.commit_hash') }}"
                                    alt=""> Плохой день
                                </div>
                            </div>
                            <div>
                                <div class="ps-5 fs-4 mb-2">👌</div>
                                <div>
                                    <img
                                    src="{{ asset('dashboard/images/card_end_img_state1.svg') }}?ver={{ config('main.commit_hash') }}"
                                    alt=""> Средний день
                                </div>
                            </div>
                            <div>
                                <div class="ps-5 fs-4 mb-2">👍</div>
                                <div>
                                    <img
                                    src="{{ asset('dashboard/images/card_end_img_state2.svg') }}?ver={{ config('main.commit_hash') }}"
                                    alt=""> Нормальный день
                                </div>
                            </div>
                            <div>
                                <div class="ps-5 fs-4 mb-2">🤙</div>
                                <div>
                                    <img
                                    src="{{ asset('dashboard/images/card_end_img_state3.svg') }}?ver={{ config('main.commit_hash') }}"
                                    alt=""> Так держать
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- EXPERIMENT RESULTS -->
    <section class="experiment_results">
        <div class="container">
            <div class="experiment_results_start" data-id="db18260b-1fa3-11f0-a467-e848b8c82000">
                <h2 data-key="Name">??? Менеджеры</h2>
                <div class="w-100">
                    <table style="white-space: nowrap;">
                        <thead>
                        <tr>
                            <th style="width: 150px;">Сотрудник</th>
                            <th style="width: 150px;">Создано счетов</th>
                            <th style="width: 150px;">Сумма счетов</th>
                            <th style="width: 150px;">Исходящие звонки</th>
                            <th style="width: 150px;">Обработано заявок</th>
                            <th style="width: 150px;">Сумма маржинальности</th>
                            <th style="width: 140px;">Конверсия, %</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td colspan="7">
                                Данные загружаются...
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <section class="experiment_results">
        <div class="container">
            <div class="experiment_results_start" data-id="bb1d21ac-a541-11f0-a485-e848b8c82000">
                <h2 data-key="Name">bb1d21ac-a541-11f0-a485-e848b8c82000</h2>
                <div class="w-100">
                    <table style="table-layout: fixed; white-space: nowrap;">
                        <thead>
                        <tr>
                            <th scope="col" style="width: 150px;">#</th>
                            <th scope="col" style="width: 115px">Поступления</th>
                            <th scope="col" style="width: 115px">Расходы</th>
                            <th scope="col" style="width: 115px">Денежный поток</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>без ПК</td>
                            <td>
                                <div class="td-content">
                                    <div data-key="Receipts" class="top text-success">?</div>
                                </div>
                            </td>
                            <td>
                                <div class="td-content">
                                    <div data-key="Payments" class="top text-danger">?</div>
                                </div>
                            </td>
                            <td>
                                <div class="td-content">
                                    <div data-key="CashFlow" class="top text-danger">?</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>с ПК (Факт + План)</td>
                            <td>
                                <div class="td-content">
                                    <div data-key="Receipts_FactPlan" class="top text-success">?</div>
                                </div>
                            </td>
                            <td>
                                <div class="td-content">
                                    <div data-key="Payments_FactPlan" class="top text-danger">?</div>
                                </div>
                            </td>
                            <td>
                                <div class="td-content">
                                    <div data-key="CashFlow_FactPlan" class="top text-danger">?</div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container tab-group">
            <ul class="nav nav-underline flex-nowrap overflow-x-auto mb-4">
                <li class="nav-item" data-id="c22e9e5a-a1d3-11f0-a485-e848b8c82000">
                    <a class="nav-link text-nowrap active"
                       data-bs-toggle="tab" data-bs-target="#tab-pane11" type="button" role="tab"
                       aria-controls="tab-pane1" aria-selected="true"
                       href="#" data-key="Name">c22e9e5a-a1d3-11f0-a485-e848b8c82000</a>
                </li>
                <li class="nav-item" data-id="9bf781a5-a1d5-11f0-a485-e848b8c82000">
                    <a class="nav-link text-nowrap"
                       data-bs-toggle="tab" data-bs-target="#tab-pane12" type="button" role="tab"
                       aria-controls="tab-pane2" aria-selected="false"
                       href="#" data-key="Name">9bf781a5-a1d5-11f0-a485-e848b8c82000</a>
                </li>
                <li class="nav-item" data-id="69c8bdcf-a1da-11f0-a485-e848b8c82000">
                    <a class="nav-link text-nowrap"
                       data-bs-toggle="tab" data-bs-target="#tab-pane13" type="button" role="tab"
                       aria-controls="tab-pane3" aria-selected="false"
                       href="#" data-key="Name">69c8bdcf-a1da-11f0-a485-e848b8c82000</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="tab-pane11" role="tabpanel">
                    <!-- CHART SECTION -->
                    <div class="chart-section">
                        <div class="container-box" data-id="c22e9e5a-a1d3-11f0-a485-e848b8c82000">
                            <div class="legend">
                                <div class="title" data-key="Name">c22e9e5a-a1d3-11f0-a485-e848b8c82000</div>
                                <div class="border"></div>
                                <div class="group"></div>
                            </div>
                            <div class="chart-container">
                                <canvas id="salesChart1"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-pane12" role="tabpanel">
                    <!-- CHART SECTION -->
                    <div class="chart-section">
                        <div class="container-box" data-id="9bf781a5-a1d5-11f0-a485-e848b8c82000">
                            <div class="legend">
                                <div class="title" data-key="Name">9bf781a5-a1d5-11f0-a485-e848b8c82000</div>
                                <div class="border"></div>
                                <div class="group"></div>
                            </div>
                            <div class="chart-container">
                                <canvas id="salesChart2"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-pane13" role="tabpanel">
                    <div class="bar">
                        <div class="container-box" data-id="69c8bdcf-a1da-11f0-a485-e848b8c82000">
                            <div class="legend">
                                <div class="title" data-key="Name">69c8bdcf-a1da-11f0-a485-e848b8c82000</div>
                                <div class="border"></div>
                                <div class="group">
                                    <div>
                                        <span class="dot last-year" style="background-color: #EB5757;"></span>Платежи
                                    </div>
                                    <div>
                                        <span class="dot this-year" style="background-color: #22c55e;"></span>Поступления
                                    </div>
                                </div>
                            </div>
                            <div class="chart-container">
                                <canvas id="myChart13"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script type="text/html" id="rowTable">
    <tr>
        <td class="name justify-content-start">{index} <span>{User}</span></td>
        <td>
            <div class="td-content">
                <div class="top">
                    {Value0}
                    <img class="{PlanClass0}" src="{indicator0}" alt="">
                </div>
                <p class="{PlanClass0}">{Plan0} <span class="{PercentClass0}">{Percent0}</span></p>
            </div>
        </td>
        <td>
            <div class="td-content">
                <div class="top">
                    {Value1}
                    <img class="{PlanClass1}" src="{indicator1}" alt="">
                </div>
                <p class="{PlanClass1}">{Plan1} <span class="{PercentClass1}">{Percent1}</span></p>
            </div>
        </td>
        <td>
            <div class="td-content">
                <div class="top">
                    {Value2}
                    <img class="{PlanClass2}" src="{indicator2}" alt="">
                </div>
                <p class="{PlanClass2}">{Plan2} <span class="{PercentClass2}">{Percent2}</span></p>
            </div>
        </td>
        <td>
            <div class="td-content">
                <div class="top">
                    {Value3}
                    <img class="{PlanClass3}" src="{indicator3}" alt="">
                </div>
                <p class="{PlanClass3}">{Plan3} <span class="{PercentClass3}">{Percent3}</span></p>
            </div>
        </td>
        <td>
            <div class="td-content">
                <div class="top">
                    {Value4}
                </div>
            </div>
        </td>
        <td>
            <div class="td-content">
                <div class="top">
                    {Value5}
                    <img class="{PlanClass5}" src="{indicator5}" alt="">
                </div>
                <p class="{PlanClass5}">{Plan5} <span class="{PercentClass5}">{Percent5}</span></p>
            </div>
        </td>
    </tr>
</script>
<!-- JQUERY -->
<script src="{{ asset('dashboard/jquery-3.6.0.min.js') }}?ver={{ config('main.commit_hash') }}"></script>
<!-- CHARTJS -->
<script src="{{ asset('dashboard/chart.js') }}?ver={{ config('main.commit_hash') }}"></script>
<!-- CHARTJS DATALABELS PLUGIN -->
<script
    src="{{ asset('dashboard/js/chartjs-plugin-datalabels.min.js') }}?ver={{ config('main.commit_hash') }}"></script>
<!-- JQUERY  -->
<script src="{{ asset('dashboard/jquery.nice-select.min.js') }}?ver={{ config('main.commit_hash') }}"></script>
<!-- BOOTSTRAP -->
<script src="{{ asset('dashboard/bootstrap.bundle.min.js') }}?ver={{ config('main.commit_hash') }}"></script>
<script src="{{ asset('dashboard/screenfull.js') }}?ver={{ config('main.commit_hash') }}"></script>
<!-- MAIN JS -->
<script src="{{ asset('dashboard/js/main.js') }}?ver={{ config('main.commit_hash') }}"></script>
</body>
</html>
