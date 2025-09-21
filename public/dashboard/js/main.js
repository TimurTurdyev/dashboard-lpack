$(document).ready(function () {
    $('select').niceSelect();

    const ctxElements = {
        'Отгруженные заказы за год': null,
        'Кол-во выставленных счетов': null,
        'Конверсия по месяцам': null,
        'Динамика клиентской базы': null,
    };

// media
    const isBigTab = window.innerWidth <= 1200;
// chart js line chart(1)
//
    const ctx = document.getElementById("salesChart").getContext("2d");

    ctxElements['Отгруженные заказы за год'] = new Chart(ctx, {
        type: "line",
        data: {
            labels: [
                "Январь", "Февраль", "Март", "Апрель", "Май", "Июнь",
                "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"
            ],
            datasets: [
                {
                    label: "Этот год",
                    data: [18, 10, 12, 15, 20, 22, 23, 28, 21, 25, 24, 26],
                    borderColor: "#22c55e",
                    backgroundColor: "#34C759",
                    fill: false,
                    tension: 0.2,
                    pointRadius: 0,
                    pointHoverRadius: 0,
                    borderWidth: 2
                },
                {
                    label: "Прошлый год",
                    data: [10, 15, 15, 20, 21, 19, 17, 22, 26, 27, 28, 29],
                    borderColor: "#AEC7ED",
                    backgroundColor: "#AEC7ED",
                    fill: false,
                    tension: 0,
                    pointRadius: 0,
                    pointHoverRadius: 0,
                    borderWidth: 2
                }
            ]
        },
        options: {
            maintainAspectRatio: false,
            interaction: {
                mode: 'index',
                intersect: false,
            },
            plugins: {

                tooltip: {
                    usePointStyle: true,
                    callbacks: {
                        labelPointStyle: function () {
                            return {
                                pointStyle: 'circle', // <-- change square to circle
                                rotation: 0,
                                color: "#000"
                            };
                        },
                        label: function (context) {
                            return `₽ ${context.formattedValue} млн`;
                        }
                    }
                },
                legend: {
                    display: false
                }
            },
            scales: {
                x: {
                    ticks: {
                        color: "#959596", // dark gray
                        font: {
                            size: 12,
                        },
                        callback: function (val, index, ticks) {
                            // Add margin-left (spacing) to first month by prepending spaces
                            return index === 0 ? '   ' + this.getLabelForValue(val) : this.getLabelForValue(val);
                        },
                    },
                    title: {
                        display: true,
                        font: {
                            size: 12,
                        },

                        ticks: {
                            color: "#959596",
                        }
                    },
                    grid: {
                        display: false, // remove background grid (vertical)
                        drawBorder: false
                    }
                },
                y: {

                    beginAtZero: true,
                    ticks: {
                        stepSize: 10,
                        callback: function (value) {
                            if (value != 0) {
                                return value + " млн";
                            }
                            return 0
                        },

                        color: "#959596",
                        font: {
                            size: 12
                        }
                    },
                    grid: {
                        display: false, // remove background grid (horizontal)
                        drawBorder: false
                    }
                }
            }
        }
    });


// bar chart
    const ctbx = document.getElementById('myChart').getContext('2d');

    ctxElements['Кол-во выставленных счетов'] = new Chart(ctbx, {
        type: 'bar',
        data: {
            labels: [
                "Январь", "Февраль", "Март", "Апрель", "Май", "Июнь",
                "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"
            ],
            datasets: [
                {
                    label: "Этот год",
                    data: [22, 28, 23, 27, 24, 28, 25, 24, 24, 4, 26, 28],
                    backgroundColor: "#00C7BE",
                    borderRadius: 6,
                    barPercentage: 0.8,          // Wider bars
                    categoryPercentage: 0.8,
                },
                {
                    label: "Прошлый год",
                    data: [12, 18, 12, 12, 19, 19, 20, 20, 20, 18, 20, 10],
                    backgroundColor: "#5856D6",
                    borderRadius: 6,
                    barPercentage: 0.8,          // Wider bars
                    categoryPercentage: 0.8,
                    pointHoverRadius: 0,
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {display: false},
                tooltip: {
                    usePointStyle: true,
                    boxWidth: 8,
                    boxHeight: 8,
                    callbacks: {
                        labelPointStyle: () => ({pointStyle: 'circle', rotation: 0}),
                        label: (context) => `₽ ${context.formattedValue} млн`
                    }
                }
            },
            scales: {
                x: {
                    grid: {display: false},
                    ticks: {
                        color: "#6b7280",
                        font: {size: 12}
                    }
                },
                y: {
                    beginAtZero: true,
                    ticks: {
                        stepSize: 10,                      // Show 0, 10, 20, 30...
                        callback: function (value) {
                            if (value != 0) {
                                return value + " млн";
                            }
                            return 0
                        },
                        color: "#6b7280",
                        font: {size: 12}
                    },
                    grid: {
                        display: false,                    // No stripes
                        drawBorder: false
                    }
                }
            }
        }
    });

// second line chart(single)
    const cx = document.getElementById('myLineChart').getContext('2d');

    ctxElements['Конверсия по месяцам'] = new Chart(cx, {
        type: 'line',
        data: {
            labels: ['Янв.', 'Февр.', 'Март', 'Апр.', 'Май', 'Июн', 'Июль', 'Авг.', 'Сент.', 'Окт.', 'Нояб.', 'Дек.'],
            datasets: [{
                label: 'Процент',
                data: [10, 20, 15, 30, 25, 35, 40, 30, 25, 45, 40, 50], // Sample data
                borderColor: '#007AFF',
                borderWidth: 2,
                fill: false,
                tension: 0.1,
                pointRadius: 0,
                pointHoverRadius: 0,
                borderWidth: 2
            }]
        },
        options: {
            interaction: {
                mode: 'index',
                intersect: false,
            },
            scales: {
                x: {
                    grid: {
                        display: false, // remove background grid (horizontal)
                        drawBorder: false
                    }
                },
                y: {
                    beginAtZero: true,
                    ticks: {
                        stepSize: 10,
                        callback: function (value) {
                            return value + '%';
                        }
                    },
                    grid: {
                        display: false, // remove background grid (horizontal)
                        drawBorder: false
                    }
                }
            },
            plugins: {
                tooltip: {
                    usePointStyle: true,
                    callbacks: {
                        labelPointStyle: function () {
                            return {
                                pointStyle: 'circle', // <-- change square to circle
                                rotation: 0,
                            };
                        },
                    }
                },
                legend: {
                    display: false // Hide legend
                }
            }
        }
    });

// second bar
    const aprilData = [
        250, 220, 101, 100, 220, 220, 220,
        100, 100, 100, 100, 100, 60, 100,
        120, 120, 120, 120, 120, 120, 120,
        120, 120, 120, 120, 220, 250, 80, 30, 80
    ];

    const labels = Array.from({length: aprilData.length}, (_, i) => (i + 1).toString());

    function calculatePercentageChange(data) {
        return data.map((val, i) => {
            if (i === 0 || data[i - 1] === 0) return '0%';
            const percent = Math.round(((val - data[i - 1]) / data[i - 1]) * 100);
            return `${percent >= 0 ? '+' : ''}${percent}%`;
        });
    }

    const percentChanges = calculatePercentageChange(aprilData);

    const ct = document.getElementById('invoiceChart').getContext('2d');
    let ctMedia = true
    if (window.innerWidth <= 768) {
        ctMedia = false
    }

    new Chart(ct, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Счета',
                data: aprilData,
                backgroundColor: 'rgb(225 225 225)'
            }]
        },
        options: {
            responsive: ctMedia,
            plugins: {
                tooltip: {
                    enabled: false // disables the tooltip on hover
                },
                datalabels: {
                    anchor: 'end',
                    align: 'end',
                    formatter: function (value) {
                        return value; // Only value on top
                    },
                    color: 'black',
                    font: {
                        size: isBigTab ? 8 : 10
                    },
                    padding: {
                        bottom: isBigTab ? 6 : 10 // Adjust this value to set distance between value and percentage
                    },
                    offset: 15
                },
                legend: {
                    display: false
                }
            },
            scales: {
                x: {
                    grid: {
                        display: false,
                        drawBorder: false
                    }
                },
                y: {
                    beginAtZero: true,
                    max: 300,
                    grid: {
                        display: false,
                        drawBorder: false
                    }
                }
            }
        },
        plugins: [
            ChartDataLabels,
            {
                id: 'percentBelowPlugin',
                afterDatasetsDraw(chart, args, options) {
                    const {ctx} = chart;
                    const dataset = chart.data.datasets[0];
                    const meta = chart.getDatasetMeta(0);

                    ctx.save();
                    ctx.font = isBigTab ? '7px Inter' : '9px Inter';
                    ctx.textAlign = 'center';
                    //   ctx.fillText(percent, bar.x, bar.y + 5);

                    dataset.data.forEach((val, index) => {
                        if (!meta.data[index]) return;
                        const bar = meta.data[index];
                        const percent = percentChanges[index];
                        const prev = index > 0 ? dataset.data[index - 1] : null;
                        const color = (index === 0 || prev === null || prev === 0 || val >= prev) ? 'green' : 'red';

                        ctx.fillStyle = color;
                        ctx.fillText(percent, bar.x, bar.y + -10); // Adjust distance as needed
                    });

                    ctx.restore();
                }
            }
        ]
    });

//   profit line chart(last)
    const main = document.getElementById('profitChart').getContext('2d');

    ctxElements['Динамика клиентской базы'] = new Chart(main, {
        type: "line",
        type: 'bar',
        data: {
            labels: [
                "Январь", "Февраль", "Март", "Апрель", "Май", "Июнь",
                "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"
            ],
            datasets: [
                {
                    label: "Теряем",
                    data: [],
                    backgroundColor: "#000",
                    borderRadius: 6,
                    barPercentage: 0.8,          // Wider bars
                    categoryPercentage: 0.8,
                },
                {
                    label: "Новые",
                    data: [],
                    backgroundColor: "#AEC7ED",
                    borderRadius: 6,
                    barPercentage: 0.8,          // Wider bars
                    categoryPercentage: 0.8,
                    pointHoverRadius: 0,
                },
                {
                    label: "Постоянные",
                    data: [],
                    backgroundColor: "#00C7BE",
                    borderRadius: 6,
                    barPercentage: 0.8,          // Wider bars
                    categoryPercentage: 0.8,
                },
                {
                    label: "Разовый",
                    data: [],
                    backgroundColor: "#5856D6",
                    borderRadius: 6,
                    barPercentage: 0.8,          // Wider bars
                    categoryPercentage: 0.8,
                    pointHoverRadius: 0,
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {display: false},
                // tooltip: {
                //     usePointStyle: true,
                //     boxWidth: 8,
                //     boxHeight: 8,
                //     callbacks: {
                //         labelPointStyle: () => ({pointStyle: 'circle', rotation: 0}),
                //         label: (context) => `${context.formattedValue}`
                //     }
                // }
            },
            scales: {
                x: {
                    grid: {display: false},
                    ticks: {
                        color: "#6b7280",
                        font: {size: 12}
                    }
                },
                y: {
                    beginAtZero: true,
                    ticks: {
                        stepSize: 10,                      // Show 0, 10, 20, 30...
                        callback: function (value) {
                            if (value != 0) {
                                return value + "";
                            }
                            return 0
                        },
                        color: "#6b7280",
                        font: {size: 12}
                    },
                    grid: {
                        display: false,                    // No stripes
                        drawBorder: false
                    }
                }
            }
        }
    });

    // select in header
    $('#selectName').on('change', function () {
        $('#haiderName').text($(this).val());
    });

    function setData() {
        $.ajax({
            url: 'crm/dashboard-data', // Example URL for admin panel
            type: 'GET', // or 'get'
            data: {}, // Data to send
            dataType: 'json', // Expected data type from the server
            success: function (json) {
                $('#server-date').text(json.serverDate);

                $('#error').hide().find('pre').text('');

                $.each(json.crmData, function (index, row) {
                    const group = row.Name.trim();
                    const $element = $(`[data-group="${group}"]`);

                    if ($element.length) {
                        $element.find('[data-key]').each(function (i, el) {
                            const key = $(el).data('key');
                            $(el).text(row[key]);
                        });
                        return;
                    }

                    console.info(row);
                    const currentChart = ctxElements[group];
                    if (currentChart) {
                        console.info(currentChart.data.datasets)

                        $.each(row.Value, function (i, value) {
                            currentChart.data.datasets[i].data = value.Data;
                        });

                        currentChart.update();
                    }
                });
                setTimeout(function () {
                    setData();
                }, 1000 * 60);
            },
            error: function (xhr, status, error) {
                // Handle errors
                console.error(xhr.responseText);
                $('#error').show().find('pre').append(xhr.responseText);
                setTimeout(function () {
                    setData();
                }, 1000 * 10);
            }
        });
    }

    setData();
});

