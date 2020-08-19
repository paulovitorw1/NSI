// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Area Chart Example
var ctx = document.getElementById("myAreaChart");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ["Ago 1", "Ago 2", "Ago 3", "Ago 4", "Ago 5", "Ago 6", "Ago 7", "Ago 8", "Ago 9", "Ago 10", "Ago 11", "Ago 12", "Ago 13", "Ago 14", "Ago 15", "Ago 16", "Ago 17", "Ago 18", "Ago 19", "Ago 20", "Ago 21", "Ago 22", "Ago 23", "Ago 24", "Ago 25", "Ago 26", "Ago 27", "Ago 28", "Ago 29", "Ago 30", "Ago 31"],
    datasets: [{
      label: "Sessions",
      lineTension: 0.3,
      backgroundColor: "rgba(2,117,216,0.2)",
      borderColor: "rgba(2,117,216,1)",
      pointRadius: 5,
      pointBackgroundColor: "rgba(2,117,216,1)",
      pointBorderColor: "rgba(255,255,255,0.8)",
      pointHoverRadius: 5,
      pointHoverBackgroundColor: "rgba(2,117,216,1)",
      pointHitRadius: 50,
      pointBorderWidth: 2,
      data: [40, 100, 800, 500, 150,150, 200, 500, 350, 234, 853, 412, 417 , 853, 412, 417 , 853, 412, 417 , 853, 412, 417, 512, 245 ,255, 545, 574, 789, 447, 245, 245, 245],
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 31
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 1000,
          maxTicksLimit: 10
        },
        gridLines: {
          color: "rgba(0, 0, 0, .125)",
        }
      }],
    },
    legend: {
      display: false
    }
  }
});
