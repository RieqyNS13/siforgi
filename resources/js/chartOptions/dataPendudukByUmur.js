var dataPendudukByUmur = {
		series: [],
        chartOptions: {
          chart: {
            stacked: true,
          },
          plotOptions: {
            bar: {
              horizontal: true,
            },

          },
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
            // y: {
            //   formatter: function (val) {
            //     return val + "K"
            //   }
            // }
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