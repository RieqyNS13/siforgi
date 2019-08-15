var dataPendudukByPendidikan = {
		series: [],
    chartOptions: {
       title: {
            text: 'Jumlah Penduduk Menurut Pendidikan'
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
          plotOptions: {
            bar: {
              horizontal: false,
            },
          },

          xaxis: {
            categories: [],
          },
          // legend: {
          //   position: 'right',
          // },
          fill: {
            opacity: 1
          }
        }
}
export {dataPendudukByPendidikan};