var piramidaPenduduk = {
	series: [],
        chartOptions: {
          chart: {
            stacked: true
          },
          colors: ['#008FFB', '#FF4560'],
          plotOptions: {
            bar: {
              horizontal: true,
              barHeight: '80%',

            },
          },
          
          stroke: {
            width: 1,
            colors: ["#fff"]
          },

         
          yaxis: {
            // min: -5,
            // max: 5,
            // title: {
            //   // text: 'Age',
            // },
          },
          tooltip: {
            shared: false,
            x: {
              formatter: function (val) {
                return val
              }
            },
            y: {
              formatter: function (val) {
                return Math.abs(val) 
              }
            }
          },
           dataLabels: {
                enabled: false
            },
          title: {
            text: 'Piramida Penduduk'
          },
          xaxis: {
            categories: [],
            title: {
              // text: 'Percent'
            },
            labels: {
              formatter: function (val) {
                return Math.abs(Math.round(val))
              }
            }
          },
        }
}
export {piramidaPenduduk};