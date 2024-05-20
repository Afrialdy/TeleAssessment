const ctx = document.getElementById('myChart');
const ourchart = document.getElementById('ourchart');
const lineChart = document.getElementById('lineChart');

/* Chart Pie */
var myChart = new Chart(ctx, {
  type: 'pie',
  data: {
    datasets: [{
      data: [10, 18, 26, 24, 22],
      label: '# of Minute',
      borderWidth: 1,
      backgroundColor: [
        '#165baa',
        '#f765a3',
        '#e697ff',
        '#2d9cdb',
        '#a155b9'
      ]
    }],
  },
  options: {
    responsive: true,
    plugins: {
      legend: {
        display: false
      },
    }
  }
});

/* Chart Pie */
var myChart = new Chart(ourchart, {
  type: 'pie',
  data: {
    datasets: [{
      data: [5, 3, 20, 27, 24, 21],
      label: '# of Score',
      borderWidth: 1,
      backgroundColor: [
        '#165baa',
        '#f765a3',
        '#e697ff',
        '#2d9cdb',
        '#a155b9',
        '#e13760'
      ]
    }],
  },
  options: {
    responsive: true,
    plugins: {
      legend: {
        display: false
      }
    }
  }
});

/* Line Chart */
var myChart = new Chart(lineChart, {
  type: 'line',
  data: {
    labels: ['Nov', 'Des', 'Jan', 'Feb', 'Mar', 'Apr'],
    datasets: [{
      label: '# of Votes',
      data: [-2, 22, -5, 20, 40, 15],
      backgroundColor: [
        'rgba(85, 85, 85, 1)'        
      ],
      borderColor: [
        'rgb(41, 155, 99)'
      ],
      borderWidth: 1
    }]
  },
  options: {
    responsive: true,
    plugins: {
      legend: {
        display: false
      }
    },
    elements: {
      line: {
        borderWidth: 3 // Mengatur ketebalan garis
      }
    },
    scales: {
      x: {
        ticks: {
          font: {
            weight: 'bold' // Mengatur ketebalan huruf sumbu x
          }
        }
      },
      y: {
        min: -100, // Mulai dari -100
        max: 100, // Hingga 100
        ticks: {
          
          font: {
            weight: 'bold' // Mengatur ketebalan huruf sumbu y
          }
        }
      }
    }
  }
});

