Highcharts.setOptions({
    lang: {
        thousandsSep: ','
    },
    credits: {
        enabled: false
    },
    exporting: {
        enabled: false
    },
colors: [
            '#60BD68',
            '#B276B2',
            '#4D4D4D',
            '#5DA5DA',
            '#FAA43A',
            '#F17CB0',
            '#B2912F',
            '#DECF3F',
            '#F15854'
        ],
})

function drawVisitorMap(container, mydata) {

    var myChart = new Highcharts.mapChart({
        chart: {
            renderTo: container,
            map: 'custom/world',
        },
        title: {
            text: 'See Where My Visitors Come From'
        },
        subtitle: {
            text: null
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
        tooltip: {
            pointFormat: '{point.name}: {point.value:,.0f}',

        },
        series: [{
            data: mydata,
            joinBy: 'hc-key',
            name: 'Visitors from:',
            states: {
                hover: {
                    color: '#BADA55'
                }
            },
        }]
    });
}

function drawBarChartUrls(container, artists, mydata, title, yaxistitle) {

    var myChart = new Highcharts.Chart({
        chart: {
            renderTo: container,
            type: 'column'
        },
        title: {
            text: title
        },
        subtitle: {
            text: null
        },
        plotOptions: {
            column: {
                colorByPoint: true
            },
            series: {
                cursor: 'pointer',
                point: {
                    events: {
                        click: function() {
                            location.href = this.options.url;
                        }
                    }
                },
            }
        },
        xAxis: {
            type: 'category',
            categories: artists,
            labels: {
                rotation: -45,
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
                enabled: true,
                rotation: -90,
                color: '#FFFFFF',
                align: 'right',
                x: 4,
                y: 10,
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif',
//                    textShadow: '0 0 3px black'
                }
            }
        }]
    });
}


function drawPieChart(container, mydata, title, sname) {

    var myChart = new Highcharts.Chart({
        chart: {
            renderTo: container,
            plotBackgroundColor: null,
            plotBorderWidth: 1,
            plotShadow: false
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
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
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

function writeIntro(intro, chartClass) {
    div = document.getElementsByClassName(chartClass)[0]
    div.innerHTML = instructions;
}

function drawLineOverLine(container,title,seriesnames,seriesdata) {

var chart1 = new Highcharts.Chart({
    chart: {
        renderTo: container,
    },
    title: {
        text: title
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
        name: seriesnames[0],
        data: seriesdata[0],
    }, {
        name: seriesnames[1],
        data: seriesdata[1],
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

