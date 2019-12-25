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
})

function drawVisitorMap(container, mydata) {

    var myChart = new Highcharts.mapChart({
        chart: {
            renderTo: container,
            map: 'custom/world',
        },
        title: {
            text: window.location.hostname.toUpperCase() + ' Visitor Map'
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
        colors: [
            '#4D4D4D',
            '#5DA5DA',
            '#FAA43A',
            '#60BD68',
            '#F17CB0',
            '#B2912F',
            '#B276B2',
            '#DECF3F',
            '#F15854'
        ],
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
        colors: ['green', 'red'],
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
