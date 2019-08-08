var dataPendudukbyGender = {
		series: [],
            chartOptions: {
          chart: {
            stacked: true,
            toolbar: {
              show: true
            },
            zoom: {
              enabled: true
            }
          },
          responsive: [{
            breakpoint: 480,
            options: {
              legend: {
                position: 'bottom',
                offsetX: -10,
                offsetY: 0
              }
            }
          }],
          plotOptions: {
            bar: {
              horizontal: false,
            },
          },

          xaxis: {
            categories: [],
          },
          legend: {
           
          },
          fill: {
            opacity: 1
          }
        }
}
export {dataPendudukbyGender};