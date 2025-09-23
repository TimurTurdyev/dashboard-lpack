<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <base href="{{ asset('/') }}">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('dashboard/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter&family=Nunito+Sans&family=Rubik&family=DM+Sans&display=swap"
        rel="stylesheet">
    <!-- CHARTJS CSS -->
    {{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.css">--}}
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard/nice-select.min.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/main.css') }}">
</head>

<body>
<div class="wrapper">
    <!-- HEADER -->
    <section class="haider">
        <div class="container">
            <div class="haider__content">
                <div class="me-auto">
                    Дата обновления данных:
                    <span id="server-date">{{ now()->format('Y-m-d H:i:s') }}</span>
                </div>
                <div class="haider_name" id="haiderName">Чепурнов В.</div>
                {{--                <form>--}}
                {{--                    <select class="haider_select__name" id="selectName">--}}
                {{--                        <option>Менеджер</option>--}}
                {{--                        <option selected>Чепурнов В.</option>--}}
                {{--                    </select>--}}
                {{--                    <select class="haider_select__time">--}}
                {{--                        <option>День</option>--}}
                {{--                        <option>Неделя</option>--}}
                {{--                        <option>Месяц</option>--}}
                {{--                    </select>--}}
                {{--                </form>--}}
            </div>
        </div>
    </section>

    <!-- GENERAL DATA -->
    <section class="general_data">
        <div class="container">
            <div class="alert alert-danger" id="error" style="display: none;">
                <h3>Лог ошибок:</h3>
                <pre></pre>
            </div>
            <div class="general_data_row">
                <!-- general_item -->
                <div class="general_item" data-id="3f92bfdb-72b4-11f0-a47b-e848b8c82000">
                    <div class="top">
                        <img src="{{ asset('dashboard/images/user-active.png') }}" alt="">
                        <div class="title">Постоянных клиентов</div>
                    </div>
                    <div class="bottom">
                        <div class="data" data-key="Value"></div>
                        <div class="quantity" data-key="Additionally"></div>
                    </div>
                </div>
                <!-- general_item -->
                <div class="general_item" data-id="069ce91b-72b2-11f0-a47b-e848b8c82000">
                    <div class="top">
                        <img src="{{ asset('dashboard/images/user-info.png') }}" alt="">
                        <div class="title">Новых клиентов</div>
                    </div>
                    <div class="bottom">
                        <div class="data" data-key="Value"></div>
                        <div class="quantity" data-key="Additionally"></div>
                    </div>
                </div>
                <!-- general_item -->
                <div class=" general_item" data-id="e08bf8cd-72b4-11f0-a47b-e848b8c82000">
                    <div class="top">
                        <img src="{{ asset('dashboard/images/user-delete.png') }}" alt="">
                        <div class="title">Потерянных клиентов</div>
                    </div>
                    <div class="bottom">
                        <div class="data" data-key="Value"></div>
                        <div class="quantity" data-key="Additionally"></div>
                    </div>
                </div>
                <!-- general_item -->
                <div class="general_item" data-id="f50290e1-16c1-11f0-a462-e848b8c82000">
                    <div class="top">
                        <img src="{{ asset('dashboard/images/general_data_icon1.png') }}" alt="">
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
                        <img src="{{ asset('dashboard/images/general_data_icon2.png') }}" alt="">
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
                        <img src="{{ asset('dashboard/images/general_data_icon3.png') }}" alt="">
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
                        <img src="{{ asset('dashboard/images/general_data_icon4.png') }}" alt="">
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
                        <img src="{{ asset('dashboard/images/general_data_icon5.png') }}" alt="">
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
                        <img src="{{ asset('dashboard/images/general_data_icon6.png') }}" alt="">
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

    <!-- CHART SECTION -->
    <section class="chart-section">
        <div class="container" data-id="e4854dd8-163e-11f0-a461-e848b8c82000">
            <div class="legend">
                <div class="title" data-key="Name">Отгруженные заказы за год</div>
                <div class="border"></div>
                <div class="group">
                    <div id="toggle-this-year">
                        <span class="dot this-year"></span>Этот год
                    </div>
                    <div id="toggle-last-year">
                        <span class="dot last-year"></span>Прошлый год
                    </div>
                </div>
            </div>
            <div class="chart-container">
                <canvas id="salesChart"></canvas>
            </div>
        </div>
    </section>

    <!-- BAR -->
    <section class="bar">
        <div class="container" data-id="3ffd47f3-164c-11f0-a461-e848b8c82000">
            <div class="legend">
                <div class="title" data-key="Name">Kоличество выставленных счетов</div>
                <div class="border"></div>
                <div class="group">
                    <div id="toggle-this-year">
                        <span class="dot last-year"></span>Этот год
                    </div>
                    <div id="toggle-last-year">
                        <span class="dot this-year"></span>Прошлый год
                    </div>
                </div>
            </div>
            <div class="chart-container">
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </section>

    <!-- CARD ITEM -->
    <section class="card_item">
        <div class="container">
            <div class="card_item_start">
                <div class="card" data-id="62af4de7-16d5-11f0-a462-e848b8c82000">
                    <div class="card_title">
                        <img src="{{ asset('dashboard/images/card_title_img.svg') }}" alt="">
                        <span data-key="Name">Создано счетов</span>
                    </div>
                    <div class="card_text">
                        <div class="left">
                            <span data-key="Value"></span>
                            <img data-key="indicator" src="{{ asset('dashboard/images/arrow-up.svg') }}" alt="">
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
                        <img src="{{ asset('dashboard/images/card_title_img2.svg') }}" alt="">
                        <span data-key="Name">Сумма счетов</span>
                    </div>
                    <div class="card_text">
                        <div class="left"><span data-key="Value"></span>
                            <img data-key="indicator" src="{{ asset('dashboard/images/arrow-up.svg') }}" alt=""></div>
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
                    <div class="card_title"><img src="{{ asset('dashboard/images/card_title_img3.svg') }}" alt="">
                        <span data-key="Name">Заявки</span>
                    </div>
                    <div class="card_text">
                        <div class="left"><span data-key="Value"></span>
                            <img data-key="indicator" src="{{ asset('dashboard/images/arrow-down.svg') }}" alt=""></div>
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
                    <div class="card_title"><img src="{{ asset('dashboard/images/card_title_img4.svg') }}" alt="">
                        <span data-key="Name">Конверсия (день)</span>
                    </div>
                    <div class="card_text">
                        <div class="left"><span data-key="Value"></span>
                            <img data-key="indicator" src="{{ asset('dashboard/images/arrow-down.svg') }}" alt=""></div>
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
                    <div class="card_title"><img src="{{ asset('dashboard/images/card_title_img5.svg') }}" alt="">
                        <span data-key="Name">Исходящие звонки</span>
                    </div>
                    <div class="card_text">
                        <div class="left"><span data-key="Value"></span>
                            <img data-key="indicator" src="{{ asset('dashboard/images/arrow-up.svg') }}" alt=""></div>
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
                    <div class="card_title"><img src="{{ asset('dashboard/images/card_title_img6.svg') }}" alt="">
                        <span data-key="Name">Исходящие e-mails</span>
                    </div>
                    <div class="card_text">
                        <div class="left"><span data-key="Value"></span> <img
                                data-key="indicator" src="{{ asset('dashboard/images/arrow-up.svg') }}" alt=""></div>
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
                    <div class="card_title"><img src="{{ asset('dashboard/images/card_title_img7.svg') }}" alt="">
                        <span data-key="Name">Сообщения в WhatsApp сегодня</span>
                    </div>
                    <div class="card_text">
                        <div class="left"><span data-key="Value"></span>
                            <img data-key="indicator" src="{{ asset('dashboard/images/arrow-up.svg') }}" alt=""></div>
                        <div class="right">
                            План<span data-key="Plan">?</span>
                        </div>
                    </div>
                    <div class="card_bottom">
                        <div class="left">Компания:<span data-key="Additionally">?</span></div>
                        <div class="right" data-key="Percent"></div>
                    </div>
                </div>
                <div class="card end">
                    <div class="card_title">??? Прогресс за день</div>
                    <div class="card_text">
                        <div class="card_img">
                            <img src="{{ asset('dashboard/images/card_end_img.svg') }}" alt="">
                        </div>
                        <div class="card_element">
                            <img src="{{ asset('dashboard/images/card_end_img_2.svg') }}" alt="">Средний день 👌
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
                <table>
                    <thead>
                    <tr>
                        <th>Сотрудник</th>
                        <th>Создано счетов</th>
                        <th>Сумма счетов</th>
                        <th>Исходящие звонки</th>
                        <th>Исходящие e-mails</th>
                        <th>Сообщения в WatsApp</th>
                        <th>Конверсия, %</th>
                    </tr>

                    </thead>
                    <tbody>
                    <tr>
                        <td class="name">1 <span>Хохлов В.</span></td>
                        <td>
                            <div class="td-content">
                                <div class="top">
                                    8
                                    <img data-key="indicator" src="{{ asset('dashboard/images/arrow-up.svg') }}" alt="">
                                </div>
                                <p>190 <span>-12%</span></p>
                            </div>
                        </td>
                        <td>
                            <div class="td-content">
                                <div class="top">
                                    0,3 мл
                                    <img data-key="indicator" src="{{ asset('dashboard/images/arrow-up.svg') }}" alt="">
                                </div>
                                <p>5 мл <span>-12%</span></p>
                            </div>
                        </td>
                        <td>
                            <div class="td-content">
                                <div class="top">
                                    30
                                    <img data-key="indicator" src="{{ asset('dashboard/images/arrow-up.svg') }}" alt="">
                                </div>
                                <p>60 <span>-12%</span></p>
                            </div>
                        </td>
                        <td>
                            <div class="td-content">
                                <div class="top">
                                    46
                                    <img data-key="indicator" src="{{ asset('dashboard/images/arrow-up.svg') }}" alt="">
                                </div>
                                <p>60<span>-12%</span></p>
                            </div>
                        </td>
                        <td>
                            <div class="td-content watsapp">
                                15
                            </div>
                        </td>
                        <td>
                            <div class="td-content">
                                <div class="top">
                                    5
                                    <img data-key="indicator" src="{{ asset('dashboard/images/arrow-up.svg') }}" alt="">
                                </div>
                                <p>20 <span>-12%</span></p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="name"> 2 <span>Чепурнов В.</span></td>
                        <td>
                            <div class="td-content">
                                <div class="top">
                                    5
                                    <img data-key="indicator" src="{{ asset('dashboard/images/arrow-up.svg') }}" alt="">
                                </div>
                                <p>190 <span>-12%</span></p>
                            </div>
                        </td>
                        <td>
                            <div class="td-content">
                                <div class="top">
                                    0,3 мл
                                    <img data-key="indicator" src="{{ asset('dashboard/images/arrow-up.svg') }}" alt="">
                                </div>
                                <p>5 мл <span>-12%</span></p>
                            </div>
                        </td>
                        <td>
                            <div class="td-content">
                                <div class="top">
                                    30
                                    <img data-key="indicator" src="{{ asset('dashboard/images/arrow-up.svg') }}" alt="">
                                </div>
                                <p>60 <span>-12%</span></p>
                            </div>
                        </td>
                        <td>
                            <div class="td-content">
                                <div class="top">
                                    34
                                    <img data-key="indicator" src="{{ asset('dashboard/images/arrow-up.svg') }}" alt="">
                                </div>
                                <p>60 <span>-12%</span></p>
                            </div>
                        </td>
                        <td>
                            <div class="td-content watsapp">
                                30
                            </div>
                        </td>
                        <td>
                            <div class="td-content">
                                <div class="top">
                                    5
                                    <img data-key="indicator" src="{{ asset('dashboard/images/arrow-up.svg') }}" alt="">
                                </div>
                                <p>20 <span>-12%</span></p>
                            </div>
                        </td>

                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- MIXED CHARTS -->
    <section class="mixed_charts">
        <div class="container">
            <div class="chart_row">
                <div class="chart_item" data-id="345e2812-16d3-11f0-a462-e848b8c82000">
                    <div class="title add" data-key="Name">Конверсия по месяцам</div>
                    <canvas id="myLineChart"></canvas>
                </div>
                <div class="chart_item">
                    <div class="group">
                        <div class="title">??? Кол-во выставленных счетов за месяц</div>
                        <select id="month-select">
                            <option value="0">Январь</option>
                            <option value="1">Февраль</option>
                            <option value="2">Март</option>
                            <option value="3" selected>Апрель</option>
                            <option value="4">Май</option>
                            <option value="5">Июнь</option>
                            <option value="6">Июль</option>
                            <option value="7">Август</option>
                            <option value="8">Сентябрь</option>
                            <option value="9">Октябрь</option>
                            <option value="10">Ноябрь</option>
                            <option value="11">Декабрь</option>
                        </select>
                    </div>

                    <div class="canvas-item">
                        <canvas id="invoiceChart" style="width: 660px;"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- INCOME CHART -->
    <section class="income_chart">
        <div class="container" data-id="2281f922-7e4a-11f0-a47c-e848b8c82000">
            <div class="legend_group">
                <div class="legend">
                    <div class="title" data-key="Name">Динамика клиентской базы</div>
                    <div class="border"></div>
                    <div class="group">
                        <div id="toggle-this-year">
                            <span class="dot this-year"></span>Теряем
                        </div>

                        <div id="toggle-last-year">
                            <span class="dot last-year "></span>Новые
                        </div>
                        <div id="toggle-this-year">
                            <span class="dot this-year" style="background-color: #00C7BE;"></span>Постоянные
                        </div>

                        <div id="toggle-last-year">
                            <span class="dot last-year" style="background-color: #5856D6"></span>Разовый
                        </div>
                    </div>
                </div>
            </div>
            <div class="chart-container">
                <canvas id="profitChart"></canvas>
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
                    <img src="{indicator0}" alt="">
                </div>
                <p>{Plan0} <span>{Percent0}</span></p>
            </div>
        </td>
        <td>
            <div class="td-content">
                <div class="top">
                    {Value1}
                    <img src="{indicator1}" alt="">
                </div>
                <p>{Plan1} <span>{Percent1}</span></p>
            </div>
        </td>
        <td>
            <div class="td-content">
                <div class="top">
                    {Value2}
                    <img src="{indicator2}" alt="">
                </div>
                <p>{Plan2} <span>{Percent2}</span></p>
            </div>
        </td>
        <td>
            <div class="td-content">
                <div class="top">
                    {Value3}
                    <img src="{indicator3}" alt="">
                </div>
                <p>{Plan3} <span>{Percent3}</span></p>
            </div>
        </td>
        <td>
            <div class="td-content watsapp">
                {Value4}
            </div>
        </td>
        <td>
            <div class="td-content">
                <div class="top">
                    {Value5}
                    <img src="{indicator5}" alt="">
                </div>
                <p>{Plan5} <span>{Percent5}</span></p>
            </div>
        </td>
    </tr>
</script>
<!-- JQUERY -->
<script src="{{ asset('dashboard/jquery-3.6.0.min.js') }}"></script>
<!-- CHARTJS -->
<script src="{{ asset('dashboard/chart.js') }}"></script>
<!-- CHARTJS DATALABELS PLUGIN -->
<script src="{{ asset('dashboard/js/chartjs-plugin-datalabels.min.js') }}"></script>
<!-- JQUERY  -->
<script src="{{ asset('dashboard/jquery.nice-select.min.js') }}"></script>
<!-- BOOTSTRAP -->
<script src="{{ asset('dashboard/bootstrap.bundle.min.js') }}"></script>
<!-- MAIN JS -->
<script src="{{ asset('dashboard/js/main.js') }}"></script>
</body>
</html>
