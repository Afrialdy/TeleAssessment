/* Test Chart */
'use strict';

$(document).ready(function() {
    $('.chart').appear(function() {
        setTimeout(function() {
            $('.chart').each(function() {
                var $this = $(this);
                $this.easyPieChart({
                    easing: 'easeOutElastic',
                    delay: 3000,
                    barColor: function() {
                        var canvas = document.createElement('canvas');
                        var context = canvas.getContext('2d');
                        var gradient = context.createLinearGradient(0, 0, 100, 100);
                        gradient.addColorStop(0, '#e17cfd');
                        gradient.addColorStop(1, '#4a88d0');
                        return gradient;
                    },
                    trackColor: '#e7effd',  // Warna latar belakang chart, sesuai dengan box
                    scaleColor: false,
                    lineWidth: 21,
                    trackWidth: 21,
                    size: 180, // Sesuaikan dengan ukuran yang diinginkan, dalam contoh ini 200px
                    lineCap: 'round',
                    onStep: function(from, to, percent) {
                        this.el.children[0].innerHTML = Math.round(percent);
                    }
                });
            });

            // Aktifkan Tooltip
            $('[data-toggle="tooltip"]').tooltip({
                placement: 'top'
            });
        }, 150);
    });
});


/* Line and Doughnut Chart */
const ctx = document.getElementById('lineChart');
const cts = document.getElementById('pieChart');

const getTextColor = (bgColor) => {
    if (typeof bgColor === 'string') {
        // Mengatasi format RGB
        const colorMatch = bgColor.match(/\d+/g);
        if (colorMatch) {
            const color = colorMatch.map(Number);
            const luminance = (0.299 * color[0] + 0.587 * color[1] + 0.114 * color[2]) / 255;
            return luminance > 0.5 ? '#000' : '#fff';
        }
    }
    // Default color jika format tidak dikenali
    return '#000';
};


const monthlyData = JSON.parse(ctx.dataset.monthlyData);

new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        datasets: [{
            label: 'Peserta',
            data: monthlyData,
            backgroundColor: [
                'rgb(70,129,198)',
                'rgb(183,127,240)',
                'rgb(174,197,235)',
                'rgb(225,124,253)',
                'rgb(161,161,215)',
                'rgb(86,85,193)',
                'rgb(170,169,247)',
                'rgb(164,128,234)',
                'rgb(181,206,250)',
                'rgb(105,148,222)',
                'rgb(195,194,249)',
                'rgb(143,131,229)',
            ],
            borderColor: 'rgb(8,44,107)',
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true
            }
        },
        plugins: {
            legend: {
                display: false
            },
            datalabels: {
                color: (context) => {
                    const backgroundColor = context.dataset.backgroundColor[context.dataIndex];
                    return getTextColor(backgroundColor);
                },
                font: {
                    size: 16,
                    weight: 'bold'
                },
                formatter: (value) => value
            }
        }
    },
    plugins: [ChartDataLabels]
});

// Pie Chart
new Chart(cts, {
    type: 'doughnut',
    data: {
        labels: JSON.parse(document.getElementById('pieChart').dataset.labels),
        datasets: [{
            data: JSON.parse(document.getElementById('pieChart').dataset.data),
            backgroundColor: [
                'rgb(70,129,198)',
                'rgb(183,127,240)',
                'rgb(174,197,235)',
                'rgb(225,124,253)',
                'rgb(161,161,215)',
                'rgb(86,85,193)',
                'rgb(170,169,247)',
                'rgb(164,128,234)',
                'rgb(181,206,250)',
                'rgb(105,148,222)',
                'rgb(195,194,249)',
                'rgb(143,131,229)',
            ],
            borderColor: 'rgb(8,44,107)',
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        plugins: {
            datalabels: {
                color: (context) => {
                    const backgroundColor = context.dataset.backgroundColor[context.dataIndex];
                    return getTextColor(backgroundColor);
                },
                font: {
                    size: 16,
                    weight: 'bold'
                },
                formatter: (value) => value
            }
        }
    },
    plugins: [ChartDataLabels]
});
