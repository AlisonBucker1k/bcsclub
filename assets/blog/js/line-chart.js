// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Be Vietnam', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

function legendClickCallback(event) {
    event = event || window.event;

    var target = event.target || event.srcElement;
    while (target.nodeName !== 'LI') {
        target = target.parentElement;
    }
    var parent = target.parentElement;
    var chartId = parseInt(parent.classList[0].split("-")[0], 10);
    var chart = Chart.instances[chartId];
    var index = Array.prototype.slice.call(parent.children).indexOf(target);
    var meta = chart.getDatasetMeta(index);
    if (meta.hidden === null) {
        meta.hidden = !chart.data.datasets[index].hidden;
        target.classList.add('legend-active');
    } else {
        target.classList.remove('legend-active');
        meta.hidden = null;
    }
    chart.update();
}

// Area Chart Example
var myLineChart = {
    type: 'line',
    data: {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [
            {
                label: 'Listings Views',
                lineTension: 0.3,
                backgroundColor: "rgba(78, 115, 223, 0.1)",
                borderColor: "rgba(78, 115, 223, 1)",
                pointRadius: 3,
                pointBackgroundColor: "rgba(255, 255, 255, 1)",
                pointBorderColor: "rgba(78, 115, 223, 1)",
                pointHoverRadius: 4,
                pointHoverBackgroundColor: "rgba(78, 115, 223, 4)",
                pointHoverBorderColor: "rgba(78, 115, 223, 4)",
                pointHitRadius: 10,
                pointBorderWidth: 2,
                data: [10, 200, 100, 270, 140, 250, 150, 270, 200, 320, 240, 300],
            },
            {
                label: 'Bookings',
                lineTension: 0.3,
                backgroundColor: "rgba(94, 207, 177, 0.1)",
                borderColor: "rgba(94, 207, 177, 0.8)",
                pointRadius: 3,
                pointBackgroundColor: "rgba(255, 255, 255, 1)",
                pointBorderColor: "rgba(94, 207, 177, 0.8)",
                pointHoverRadius: 4,
                pointHoverBackgroundColor: "rgba(94, 207, 177, 0.9)",
                pointHoverBorderColor: "rgba(94, 207, 177, 0.9)",
                pointHitRadius: 10,
                pointBorderWidth: 2,
                data: [50, 100, 150, 210, 140, 50, 190, 110, 260, 110, 200, 130],
            },


        ],
    },
    options: {
        scales: {
            xAxes: [{
                gridLines: {
                    display: false,
                    drawBorder: false
                },
                ticks: {
                    maxTicksLimit: 7
                }
            }],
            yAxes: [{
                ticks: {
                    maxTicksLimit: 5,
                    padding: 10,
                },
                gridLines: {
                    color: "rgb(234, 236, 244)",
                    zeroLineColor: "rgb(234, 236, 244)",
                    drawBorder: false,
                    borderDash: [2],
                    zeroLineBorderDash: [2]
                }
            }],
        },
        legend: {
            display: false
        },
        tooltips: {
            backgroundColor: "rgb(255,255,255)",
            bodyFontColor: "#858796",
            titleMarginBottom: 10,
            titleFontColor: '#6e707e',
            titleFontSize: 14,
            borderColor: '#dddfeb',
            borderWidth: 1,
            xPadding: 15,
            yPadding: 15,
            displayColors: false,
            intersect: false,
            caretPadding: 10,
        }
    }
};

var ctx = document.getElementById("lineChart");
var myLegendContainer = document.getElementById("myChartLegend");

var myChart = new Chart(ctx, myLineChart);
myLegendContainer.innerHTML = myChart.generateLegend();
var legendItems = myLegendContainer.getElementsByTagName('li');
for (var i = 0; i < legendItems.length; i += 1) {
    legendItems[i].addEventListener("click", legendClickCallback, false);
}