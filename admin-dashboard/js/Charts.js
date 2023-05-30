//sale-today
new Chart(document.getElementById("sale-today"), {
    type: 'line',
    data: {
        labels: [1500, 1600, 1700, 1750, 1800, 1850, 1900, 1950, 1999, 2050],
        datasets: [{
            data: [86, 800, 106, 1500, 107, 111, 500, 800, 783, 2478],
            label: "ارزش فروش امروز",
            borderColor: "#3e95cd",
            fill: true,
            backgroundColor: 'rgba(1,68,241,0.2)',
        }
        ]
    },
    options: {
        elements: {
            point: {
                radius: 0
            }
        },
        scales: {
            xAxes: [{
                gridLines: {
                    display: false
                }
            }],
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                },
                gridLines: {
                    display: false
                }
            }]
        }
    },
});
Chart.defaults.global.defaultFontColor = '#838383';
Chart.defaults.global.defaultFontFamily = 'danapro';


//order-today
new Chart(document.getElementById("order-today"), {
    type: 'line',
    data: {
        labels: [1500, 1600, 1700, 1750, 1800, 1850, 1900, 1950, 1999, 2050],
        datasets: [{
            data: [2478, 783, 221, 500, 111, 900, 106, 1000, 86],
            label: "تعداد سفارشات امروز",
            borderColor: "#F10101",
            fill: true,
            backgroundColor: 'rgba(241,1,1,0.2)',
        }
        ]
    },
    options: {
        elements: {
            point: {
                radius: 0
            }
        },
        scales: {
            xAxes: [{
                gridLines: {
                    display: false
                }
            }],
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                },
                gridLines: {
                    display: false
                }
            }]
        }
    },
});
//order-today