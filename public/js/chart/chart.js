                        
/*
    ===================================
        tahunan Visitors | Options
    ===================================
*/


var tahunan = {
    chart: {
        height: 230,
        type: 'bar',
        toolbar: {
            show: false,
        },
        dropShadow: {
            enabled: true,
            top: 1,
            left: 1,
            blur: 1,
            color: '#515365',
            opacity: 0.3,
        }
    },
    colors: ['#fc8edf', '#c20d5a'],
    plotOptions: {
        bar: {
            horizontal: false,
            columnWidth: '55%',
            endingShape: 'rounded'
        },
    },
    dataLabels: {
        enabled: false
    },
    legend: {
        position: 'bottom',
        horizontalAlign: 'center',
        fontSize: '14px',
        markers: {
            width: 10,
            height: 10,
        },
        itemMargin: {
            horizontal: 9,
            vertical: 8
        }
    },
    grid: {
        borderColor: '#f7f7f7',
    },
    stroke: {
        show: true,
        width: 2,
        colors: ['transparent']
    },
    series: [{
        name: 'Direct',
        data: [58, 44, 55, 57, 56, 61, 58, 63, 60, 66, 56, 63]
    }, {
        name: 'Organic',
        data: [91, 76, 85, 101, 98, 87, 105, 91, 114, 94, 66, 70]
    }],
    xaxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    },
    fill: {
        type: 'gradient',
        gradient: {
            shade: 'dark',
            type: 'vertical',
            shadeIntensity: 0.3,
            inverseColors: false,
            opacityFrom: 1,
            opacityTo: 0.8,
            stops: [0, 100]
        }
    },
    tooltip: {
        theme: 'dark',
        y: {
            formatter: function(val) {
                return val
            }
        }
    }
}

/*
    ==============================
        Statistics | Options
    ==============================
*/




/*
    ===================================
        bulanan Visitors | Options
    ===================================
*/


var bulanan = {
    chart: {
        height: 230,
        type: 'bar',
        toolbar: {
            show: false,
        },
        dropShadow: {
            enabled: true,
            top: 1,
            left: 1,
            blur: 1,
            color: '#515365',
            opacity: 0.3,
        }
    },
    colors: ['#fc8edf', '#c20d5a'],
    plotOptions: {
        bar: {
            horizontal: false,
            columnWidth: '55%',
            endingShape: 'rounded'
        },
    },
    dataLabels: {
        enabled: false
    },
    legend: {
        position: 'bottom',
        horizontalAlign: 'center',
        fontSize: '14px',
        markers: {
            width: 10,
            height: 10,
        },
        itemMargin: {
            horizontal: 9,
            vertical: 8
        }
    },
    grid: {
        borderColor: '#f7f7f7',
    },
    stroke: {
        show: true,
        width: 2,
        colors: ['transparent']
    },
    series: [{
        name: 'Direct',
        data: [58, 44, 55, 57, 56, 61, 58, 63, 60, 66, 56, 63, 58, 44, 55, 57, 56, 61, 58, 63, 60, 66, 56, 63, 61, 58, 63, 60, 66, 56, 63]
    }, {
        name: 'Organic',
        data: [91, 76, 85, 101, 98, 87, 105, 91, 114, 94, 66, 70, 91, 76, 85, 101, 98, 87, 105, 91, 114, 94, 66, 70, 87, 105, 91, 114, 94, 66, 70, ]
    }],
    xaxis: {
        categories: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31'],
    },
    fill: {
        type: 'gradient',
        gradient: {
            shade: 'dark',
            type: 'vertical',
            shadeIntensity: 0.3,
            inverseColors: false,
            opacityFrom: 1,
            opacityTo: 0.8,
            stops: [0, 100]
        }
    },
    tooltip: {
        theme: 'dark',
        y: {
            formatter: function(val) {
                return val
            }
        }
    }
}

/*
    ==============================
        Statistics | Options
    ==============================
*/



/*
    ===================================
        mingguan Visitors | Options
    ===================================
*/


var mingguan = {
    chart: {
        height: 230,
        type: 'bar',
        toolbar: {
            show: false,
        },
        dropShadow: {
            enabled: true,
            top: 1,
            left: 1,
            blur: 1,
            color: '#515365',
            opacity: 0.3,
        }
    },
    colors: ['#fc8edf', '#c20d5a'],
    plotOptions: {
        bar: {
            horizontal: false,
            columnWidth: '55%',
            endingShape: 'rounded'
        },
    },
    dataLabels: {
        enabled: false
    },
    legend: {
        position: 'bottom',
        horizontalAlign: 'center',
        fontSize: '12px',
        markers: {
            width: 10,
            height: 10,
        },
        itemMargin: {
            horizontal: 9,
            vertical: 8
        }
    },
    grid: {
        borderColor: '#f7f7f7',
    },
    stroke: {
        show: true,
        width: 2,
        colors: ['transparent']
    },
    series: [{
        name: 'Direct',
        data: [58, 44, 55, 57, 56, 61, 58]
    }, {
        name: 'Organic',
        data: [91, 76, 85, 101, 98, 87, 105]
    }],
    xaxis: {
        categories: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sub'],
    },
    fill: {
        type: 'gradient',
        gradient: {
            shade: 'dark',
            type: 'vertical',
            shadeIntensity: 0.3,
            inverseColors: false,
            opacityFrom: 1,
            opacityTo: 0.8,
            stops: [0, 100]
        }
    },
    tooltip: {
        theme: 'dark',
        y: {
            formatter: function(val) {
                return val
            }
        }
    }
}

/*
    ==============================
        Statistics | Options
    ==============================
*/











/*
    ==============================
    |    @Render Charts Script    |
    ==============================
*/


/*
    ===================================
        tahunan Visitors | Script
    ===================================
*/


var d_1C_3 = new ApexCharts(
    document.querySelector("#tahunan"),
    tahunan
);
d_1C_3.render();

/*
    ===================================
        bulanan Visitors | Script
    ===================================
*/


var d_1C_3 = new ApexCharts(
    document.querySelector("#bulanan"),
    bulanan
);
d_1C_3.render();

/*
    ===================================
        mingguan Visitors | Script
    ===================================
*/


var d_1C_3 = new ApexCharts(
    document.querySelector("#mingguan"),
    mingguan
);
d_1C_3.render();



/*
    ==============================
        Statistics | Script
    ==============================
*/

/*
    ==================================
        Traffic | Options
    ==================================
*/

var options = {
    chart: {
        type: 'donut',
        width: 380
    },
    colors: ['#5c1ac3', '#c20d5a', '#e2a03f', '#c20d5a'],
    dataLabels: {
        enabled: false
    },
    legend: {
        position: 'bottom',
        horizontalAlign: 'center',
        fontSize: '14px',
        markers: {
            width: 10,
            height: 10,
        },
        itemMargin: {
            horizontal: 9,
            vertical: 8
        }
    },
    plotOptions: {
        pie: {
            donut: {
                size: '65%',
                background: 'transparent',
                labels: {
                    show: true,
                    name: {
                        show: true,
                        fontSize: '20px',
                        fontFamily: 'Nunito, sans-serif',
                        color: undefined,
                        offsetY: -10
                    },
                    value: {
                        show: true,
                        fontSize: '26px',
                        fontFamily: 'Nunito, sans-serif',
                        color: '#bfc9d4',
                        offsetY: 16,
                        formatter: function(val) {
                            return val
                        }
                    },
                    total: {
                        show: true,
                        showAlways: true,
                        label: 'Total',
                        color: '#c20d5a',
                        formatter: function(w) {
                            return w.globals.seriesTotals.reduce(function(a, b) {
                                return a + b
                            }, 0)
                        }
                    }
                }
            }
        }
    },

    series: [985, 737, 270],
    labels: ['Referral', 'Google', 'Others'],
    responsive: [{
        breakpoint: 1599,
        options: {
            chart: {
                width: '370px',
                height: '385px'
            },
            legend: {
                position: 'bottom'
            }
        },

        breakpoint: 1439,
        options: {
            chart: {
                width: '370px',
                height: '385px'
            },
            legend: {
                position: 'bottom'
            },
            plotOptions: {
                pie: {
                    donut: {
                        size: '65%',
                    }
                }
            }
        },
    }]
}


/*
    ==============================
    |    @Render Charts Script    |
    ==============================
*/


/*
      =================================
          Traffic | Render
      =================================
  */

var chart = new ApexCharts(
    document.querySelector("#chart-2"),
    options
);

chart.render();

// Followers


var d_1options3 = {
    chart: {
        id: 'sparkline1',
        type: 'area',
        height: 50,
        sparkline: {
            enabled: true
        },
    },
    stroke: {
        curve: 'smooth',
        width: 2,
    },
    series: [{
        name: 'Sales',
        data: [38, 60, 38, 52, 36, 40, 28]
    }],
    labels: ['1', '2', '3', '4', '5', '6', '7'],
    yaxis: {
        min: 0
    },
    colors: ['#4361ee'],
    tooltip: {
        x: {
            show: false,
        }
    },
    fill: {
        type: "gradient",
        gradient: {
            type: "vertical",
            shadeIntensity: 1,
            inverseColors: !1,
            opacityFrom: .60,
            opacityTo: .05,
            stops: [100, 100]
        }
    }
}


// Followers


var d_1C_5 = new ApexCharts(document.querySelector("#hybrid-followers"), d_1options3);
d_1C_5.render()
                     

// Referral


var d_1options4 = {
    chart: {
        id: 'sparkline1',
        type: 'area',
        height: 50,
        sparkline: {
            enabled: true
        },
    },
    stroke: {
        curve: 'smooth',
        width: 0,
    },
    series: [{
        name: 'Pengunjung Halaman',
        data: [60, 28, 52, 38, 40, 36, 38]
    }],
    labels: ['1', '2', '3', '4', '5', '6', '7'],
    yaxis: {
        min: 0
    },
    colors: ['#fff'],
    tooltip: {
        x: {
            show: false,
        }
    },
    fill: {
        type: "gradient",
        gradient: {
            type: "vertical",
            shadeIntensity: 1,
            inverseColors: !1,
            opacityFrom: .60,
            opacityTo: .05,
            stops: [100, 100]
        }
    }
}

// Referral


var d_1C_6 = new ApexCharts(document.querySelector("#pengunjung-web"), d_1options4);
d_1C_6.render()

// Engagement Rate


var d_1options5 = {
    chart: {
        id: 'sparkline1',
        type: 'area',
        height: 50,
        sparkline: {
            enabled: true
        },
    },
    stroke: {
        curve: 'smooth',
        width: 2,
    },
    fill: {
        opacity: 1,
    },
    series: [{
        name: 'Bonus Rate',
        data: [28, 50, 36, 60, 38, 52, 38]
    }],
    labels: ['1', '2', '3', '4', '5', '6', '7'],
    yaxis: {
        min: 0
    },
    colors: ['#1abc9c'],
    tooltip: {
        x: {
            show: false,
        }
    },
    fill: {
        type: "gradient",
        gradient: {
            type: "vertical",
            shadeIntensity: 1,
            inverseColors: !1,
            opacityFrom: .50,
            opacityTo: .05,
            stops: [100, 100]
        }
    }
}


// Engagement Rate


var d_1C_7 = new ApexCharts(document.querySelector("#rate"), d_1options5);
d_1C_7.render()


// Revenue Rate


var d_1options6 = {
    chart: {
        id: 'sparkline1',
        type: 'area',
        height: 50,
        sparkline: {
            enabled: true
        },
    },
    stroke: {
        curve: 'smooth',
        width: 2,
    },
    fill: {
        opacity: 1,
    },
    series: [{
        name: 'Revenue Status',
        data: [28, 50, 36, 60, 38, 52, 38]
    }],
    labels: ['1', '2', '3', '4', '5', '6', '7'],
    yaxis: {
        min: 0
    },
    colors: ['#af4190'],
    tooltip: {
        x: {
            show: false,
        }
    },
    fill: {
        type: "gradient",
        gradient: {
            type: "vertical",
            shadeIntensity: 1,
            inverseColors: !1,
            opacityFrom: .30,
            opacityTo: .05,
            stops: [100, 100]
        }
    }
}


/*
    ==============================
    |    @Render Charts Script    |
    ==============================
*/


// Engagement Rate


var d_1C_7 = new ApexCharts(document.querySelector("#status"), d_1options6);
d_1C_7.render()
                    