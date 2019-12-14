function drawHamilton(container) {

    var myclass = ".".concat(container)
            
    eraseChart(container)


$(myclass).highcharts({

        colors: ['green','red'],
    chart: {
        type: 'spline'
    },
    title: {
        text: 'When We Won The Hamilton Lottery'
    },
    xAxis: {
        type: 'datetime',
        dateTimeLabelFormats: {
            day: '%b %e, %Y',
            week: '%b %e, %Y'
        }
    },
    yAxis: {
        visible: false,
        min: 0,
        max: 4
    },

        credits : {
            enabled: false
        },

    tooltip: {
        headerFormat: '<b>{series.name}</b><br>',
        pointFormat: '{point.x:%B %e, %Y}'
    },

    plotOptions: {
        series: {
            marker: {
                enabled: true
            }
        }
    },


    series: [{
        name: "Ron",
        data: [
            [Date.UTC(2019, 8, 3), 3],
            [Date.UTC(2019, 8, 15), 3],
            [Date.UTC(2019, 11, 4), 3],
            [Date.UTC(2019, 11, 10), 3]
        ]
    }, {
        name: "Claudia",
        data: [
            [Date.UTC(2019, 6, 28), 2]
        ]
    }],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                plotOptions: {
                    series: {
                        marker: {
                            radius: 2.5
                        }
                    }
                }
            }
        }]
    }
});


}




function drawVisitorMap(container, mydata) {

    var myclass = ".".concat(container)

    eraseChart(container)

    $(myclass).highcharts('Map', {

        title : {
            text : window.location.hostname.toUpperCase() + ' Visitor Map'
        },

        subtitle : {
            text : null
        },
        credits : {
            enabled: false
        },
        exporting : {
            enabled: false
        },
        mapNavigation: {
            enabled: true,
            buttonOptions: {
                verticalAlign: 'bottom'
            }
        },

        colorAxis: {
            min: 1,
            type: 'logarithmic',
            minColor: '#ffdddd',
            maxColor: '#ff0000'
        },
        series : [{
            data : mydata,
            mapData: Highcharts.maps['custom/world'],
            joinBy: 'hc-key',
            name: 'Visitors from:',
            states: {
                hover: {
                    color: '#BADA55'
                }
            },
            dataLabels: {
                enabled: false,
                format: '{point.name}'
            }
        }]
    });
}

function drawBarChartUrls(container, artists, mydata, title, yaxistitle) {

    var myclass = ".".concat(container)

    eraseChart(container)

    $(myclass).highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: title
        },
        subtitle: {
            text: null
        },
        credits : {
            enabled: false
        },
        exporting : {
            enabled: false
        },
        plotOptions: {
            column: {
               colorByPoint: true
            },
//            series: {
//                cursor: 'pointer',
//                point: {
//                    events: {
//                        click: function () {
//                            location.href = this.options.url;
//                        }
//                    }
//                },
//            }
        },
        colors: [
           'Green',
           'Red'
        ],
        xAxis: {
            type: 'category',
            categories: artists,
            labels: {
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: yaxistitle
            }
        },
        legend: {
            enabled: false
        },
        tooltip: {
            pointFormat: yaxistitle + ': <b>{point.y}</b>'
        },
        series: [{
            name: 'Artist',
            data: mydata,
            dataLabels: {
                enabled: false,
                rotation: -360,
                color: '#FFFFFF',
                align: 'right',
                x: 4,
                y: 10,
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif',
                    textShadow: '0 0 3px black'
                }
            }
        }]
    });
}


function drawPieChart(container, mydata, title, sname) {

    var myclass = ".".concat(container)

    eraseChart(container)

    $(myclass).highcharts({
        colors: ['green','red'],
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: 1,
            plotShadow: false
        },
        credits : {
            enabled: false
        },
        exporting : {
            enabled: false
        },
        title: {
            text: title
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f}%',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            type: 'pie',
            name: sname,
            data: mydata,
        }]
    });
}


function eraseChart(container) {

   var myclass = ".".concat(container)

    if ( $(myclass).highcharts() ) {
        $(myclass).highcharts().destroy();
        $(this).attr('disabled', true);
     }
}

function writeIntro(intro,chartClass) {
   div = document.getElementsByClassName(chartClass)[0]
   div.innerHTML = instructions;
}
