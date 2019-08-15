var dataPendudukByGoldar = {
        series: [],
        chartOptions: {
           title: {
            text: 'Jumlah Penduduk Menurut Gol. Darah'
          },
          plotOptions: {
            bar: {
              horizontal: false,
              columnWidth: '55%',
              endingShape: 'rounded'  
            },
          },
          dataLabels: {
            enabled: false
          },
          stroke: {
            show: true,
            width: 2,
            colors: ['transparent']
          },
          tooltip: {
            y: {
              formatter: function (val) {
                return val + " orang"
              }
            }
          },
          xaxis: {
            categories: [],
          },
          yaxis: {
            // title: {
            //   text: '$ (thousands)'
            // }
          },
          fill: {
            opacity: 1

          },
          tooltip: {
            // y: {
            //   formatter: function (val) {
            //     return "$ " + val + " thousands"
            //   }
            // }
          }
        }

}
export {dataPendudukByGoldar};