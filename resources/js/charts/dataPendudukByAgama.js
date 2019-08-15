var dataPendudukbyAgama = {
		    series: [{
          data: []
        }],
        chartOptions: {
          tooltip: {
            y: {
              formatter: function (val) {
                return val + " orang"
              }
            }
          },
          plotOptions: {
            bar: {
              horizontal: true,
            }
          },
           title: {
            text: 'Jumlah Penduduk Menurut Agama'
          },
          dataLabels: {
            enabled: false
          },
          xaxis: {
            categories: [],
          }
        }
}
export {dataPendudukbyAgama};