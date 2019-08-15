var dataPendudukByUmur = {
		series: [],
        chartOptions: {
          chart: {
            stacked: true,
          },
          plotOptions: {
            bar: {
   //            barHeight: '55%',
              horizontal: true,
              //barHeight: '80%',
             
            },

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
          stroke: {
            width: 1,
            colors: ['#fff']
          },

          title: {
            text: 'Jumlah Penduduk Menurut Umur'
          },
          xaxis: {
            categories: [],
            // labels: {
            //   formatter: function (val) {
            //     return val + "K"
            //   }
            // }
          },
         
          yaxis: {
            title: {
              text: undefined
            },
          },
          tooltip: {
            y: {
              formatter: function (val) {
                return val + " orang"
              }
            },
          },
          fill: {
            opacity: 1

          },

          legend: {
            position: 'top',
            horizontalAlign: 'left',
            offsetX: 40
          }
        }
}
export {dataPendudukByUmur};