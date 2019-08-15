var dataPendudukbyGender = {
		series: [],
            chartOptions: {
               title: {
            text: 'Jumlah Penduduk Menurut Jen. Kelamin'
          },
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
          tooltip: {
            y: {
              formatter: function (val) {
                return val + " orang"
              }
            }
          },
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