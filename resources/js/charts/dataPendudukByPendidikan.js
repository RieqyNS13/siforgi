var dataPendudukByPendidikan = {
		series: [],
    chartOptions: {
        dataLabels: {
            enabled: true
          },
         
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
          // legend: {
          //   position: 'right',
          // },
          fill: {
            opacity: 1
          }
        }
}
export {dataPendudukByPendidikan};