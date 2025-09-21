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
                <div class="me-auto">Дата обновления данных: <span id="server-date">{{ now()->format('Y-m-d H:i:s') }}</span></div>
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
                <div class="general_item" data-group="Постоянных клиентов">
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
                <div class="general_item" data-group="Новых клиентов">
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
                <div class=" general_item" data-group="Потерянных клиентов">
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
                <div class="general_item" data-group="В воронке">
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
                <div class="general_item" data-group="Закрыто">
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
                <div class=" general_item" data-group="Выполнения плана, год">
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
                <div class=" general_item" data-group="Средний чек">
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
                <div class=" general_item" data-group="Конверсия за год">
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
                <div class="general_item" data-group="Среднее время">
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
        <div class="container">
            <div class="legend">
                <div class="title">Отгруженные заказы за год</div>
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
        <div class="container">
            <div class="legend">
                <div class="title">Kоличество выставленных счетов</div>
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
                <div class="card" data-group="Создано счетов">
                    <div class="card_title"><img src="{{ asset('dashboard/images/card_title_img.svg') }}" alt="">Создано
                        счетов
                    </div>
                    <div class="card_text">
                        <div class="left"><span data-key="Value"></span>
                            <img src="{{ asset('dashboard/images/card_text_left_img.svg') }}" alt="">
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
                <div class="card" data-group="Сумма счетов">
                    <div class="card_title"><img src="{{ asset('dashboard/images/card_title_img2.svg') }}" alt="">Сумма
                        счетов
                    </div>
                    <div class="card_text">
                        <div class="left"><span data-key="Value"></span>
                            <img src="{{ asset('dashboard/images/card_text_left_img2.svg') }}" alt=""></div>
                        <div class="right">
                            План<span data-key="Plan">?</span>
                        </div>
                    </div>
                    <div class="card_bottom">
                        <div class="left">Компания:<span data-key="Additionally">?</span></div>
                        <div class="right green" data-key="Percent"></div>
                    </div>
                </div>
                <div class="card" data-group="Заявки">
                    <div class="card_title"><img src="{{ asset('dashboard/images/card_title_img3.svg') }}" alt="">Заявки
                    </div>
                    <div class="card_text">
                        <div class="left"><span data-key="Value"></span>
                            <img src="{{ asset('dashboard/images/card_text_left_img3.svg') }}" alt=""></div>
                        <div class="right ">
                            План<span data-key="Plan">?</span>
                        </div>
                    </div>
                    <div class="card_bottom">
                        <div class="left">Компания:<span data-key="Additionally">?</span></div>
                        <div class="right yellow" data-key="Percent"></div>
                    </div>
                </div>
                <div class="card" data-group="Конверсия (день)">
                    <div class="card_title"><img src="{{ asset('dashboard/images/card_title_img4.svg') }}" alt="">Конверсия
                        (день)
                    </div>
                    <div class="card_text">
                        <div class="left"><span data-key="Value"></span>
                            <img src="{{ asset('dashboard/images/card_text_left_img3.svg') }}" alt=""></div>
                        <div class="right ">
                            План<span data-key="Plan">?</span>
                        </div>
                    </div>
                    <div class="card_bottom">
                        <div class="left">Компания:<span data-key="Additionally">?</span></div>
                        <div class="right yellow" data-key="Percent"></div>
                    </div>
                </div>
                <div class="card" data-group="Звонки">
                    <div class="card_title"><img src="{{ asset('dashboard/images/card_title_img5.svg') }}" alt="">Исходящие
                        звонки
                    </div>
                    <div class="card_text">
                        <div class="left"><span data-key="Value"></span>
                            <img src="{{ asset('dashboard/images/card_text_left_img.svg') }}" alt=""></div>
                        <div class="right">
                            План<span data-key="Plan">?</span>
                        </div>
                    </div>
                    <div class="card_bottom">
                        <div class="left">Компания:<span data-key="Additionally">?</span></div>
                        <div class="right" data-key="Percent"></div>
                    </div>
                </div>
                <div class="card" data-group="Исходящие e-mails">
                    <div class="card_title"><img src="{{ asset('dashboard/images/card_title_img6.svg') }}" alt="">Исходящие
                        e-mails
                    </div>
                    <div class="card_text">
                        <div class="left"><span data-key="Value"></span> <img
                                src="{{ asset('dashboard/images/card_text_left_img.svg') }}" alt=""></div>
                        <div class="right">
                            План<span data-key="Plan">?</span>
                        </div>
                    </div>
                    <div class="card_bottom">
                        <div class="left">Компания:<span data-key="Additionally">?</span></div>
                        <div class="right" data-key="Percent"></div>
                    </div>
                </div>
                <div class="card" data-group="WhatsApp">
                    <div class="card_title"><img src="{{ asset('dashboard/images/card_title_img7.svg') }}" alt="">Сообщения
                        в
                        WhatsApp сегодня
                    </div>
                    <div class="card_text">
                        <div class="left"><span data-key="Value"></span>
                            <img src="{{ asset('dashboard/images/card_text_left_img.svg') }}" alt=""></div>
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
            <div class="experiment_results_start">
                <h2>??? Менеджеры</h2>
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
                                    <img src="{{ asset('dashboard/images/card_text_left_img.svg') }}" alt="">
                                </div>
                                <p>190 <span>-12%</span></p>
                            </div>
                        </td>
                        <td>
                            <div class="td-content">
                                <div class="top">
                                    0,3 мл
                                    <img src="{{ asset('dashboard/images/card_text_left_img.svg') }}" alt="">
                                </div>
                                <p>5 мл <span>-12%</span></p>
                            </div>
                        </td>
                        <td>
                            <div class="td-content">
                                <div class="top">
                                    30
                                    <img src="{{ asset('dashboard/images/card_text_left_img.svg') }}" alt="">
                                </div>
                                <p>60 <span>-12%</span></p>
                            </div>
                        </td>
                        <td>
                            <div class="td-content">
                                <div class="top">
                                    46
                                    <img src="{{ asset('dashboard/images/card_text_left_img.svg') }}" alt="">
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
                                    <img src="{{ asset('dashboard/images/card_text_left_img.svg') }}" alt="">
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
                                    <img src="{{ asset('dashboard/images/card_text_left_img.svg') }}" alt="">
                                </div>
                                <p>190 <span>-12%</span></p>
                            </div>
                        </td>
                        <td>
                            <div class="td-content">
                                <div class="top">
                                    0,3 мл
                                    <img src="{{ asset('dashboard/images/card_text_left_img.svg') }}" alt="">
                                </div>
                                <p>5 мл <span>-12%</span></p>
                            </div>
                        </td>
                        <td>
                            <div class="td-content">
                                <div class="top">
                                    30
                                    <img src="{{ asset('dashboard/images/card_text_left_img.svg') }}" alt="">
                                </div>
                                <p>60 <span>-12%</span></p>
                            </div>
                        </td>
                        <td>
                            <div class="td-content">
                                <div class="top">
                                    34
                                    <img src="{{ asset('dashboard/images/card_text_left_img.svg') }}" alt="">
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
                                    <img src="{{ asset('dashboard/images/card_text_left_img.svg') }}" alt="">
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
                <div class="chart_item">
                    <div class="title add">Конверсия по месяцам</div>
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
        <div class="container">
            <div class="legend_group">
                <div class="legend">
                    <div class="title">Динамика клиентской базы</div>
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
                            <span class="dot last-year " style="background-color: #5856D6"></span>Разовый
                        </div>
                    </div>
                </div>

                {{--                <div class="select_group">--}}
                {{--                    <select id="month-select">--}}
                {{--                        <option value="0">Январь</option>--}}
                {{--                        <option value="1">Февраль</option>--}}
                {{--                        <option value="2">Март</option>--}}
                {{--                        <option value="3" selected>Апрель</option>--}}
                {{--                        <option value="4">Май</option>--}}
                {{--                        <option value="5">Июнь</option>--}}
                {{--                        <option value="6">Июль</option>--}}
                {{--                        <option value="7">Август</option>--}}
                {{--                        <option value="8">Сентябрь</option>--}}
                {{--                        <option value="9">Октябрь</option>--}}
                {{--                        <option value="10">Ноябрь</option>--}}
                {{--                        <option value="11">Декабрь</option>--}}
                {{--                    </select>--}}

                {{--                    <select name="day" id="day-select">--}}

                {{--                        <option value="" selected disabled>День</option>--}}
                {{--                        <option value="1">1</option>--}}
                {{--                        <option value="2">2</option>--}}
                {{--                        <option value="3">3</option>--}}
                {{--                        <option value="4">4</option>--}}
                {{--                        <option value="5">5</option>--}}
                {{--                        <option value="6">6</option>--}}
                {{--                        <option value="7">7</option>--}}
                {{--                        <option value="8">8</option>--}}
                {{--                        <option value="9">9</option>--}}
                {{--                        <option value="10">10</option>--}}
                {{--                        <option value="11">11</option>--}}
                {{--                        <option value="12">12</option>--}}
                {{--                        <option value="13">13</option>--}}
                {{--                        <option value="14">14</option>--}}
                {{--                        <option value="15">15</option>--}}
                {{--                        <option value="16">16</option>--}}
                {{--                        <option value="17">17</option>--}}
                {{--                        <option value="18">18</option>--}}
                {{--                        <option value="19">19</option>--}}
                {{--                        <option value="20">20</option>--}}
                {{--                        <option value="21">21</option>--}}
                {{--                        <option value="22">22</option>--}}
                {{--                        <option value="23">23</option>--}}
                {{--                        <option value="24">24</option>--}}
                {{--                        <option value="25">25</option>--}}
                {{--                        <option value="26">26</option>--}}
                {{--                        <option value="27">27</option>--}}
                {{--                        <option value="28">28</option>--}}
                {{--                        <option value="29">29</option>--}}
                {{--                        <option value="30">30</option>--}}
                {{--                    </select>--}}
                {{--                </div>--}}
            </div>

            <div class="chart-container">
                <canvas id="profitChart"></canvas>
            </div>
        </div>
    </section>
</div>
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
