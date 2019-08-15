<template>
  <v-app id="inspire">
    <v-navigation-drawer
      v-model="drawer"
      app
    >
      <v-list dense>
        <v-list-item-group v-model="menu1" color="primary" mandatory>

        <v-list-item @click="home">
          <v-list-item-action>
            <v-icon>home</v-icon>
          </v-list-item-action>
          <v-list-item-content>
            <v-list-item-title>Home</v-list-item-title>
          </v-list-item-content>
        </v-list-item> 


        <v-list-item @click="">
          <v-list-item-action>
            <v-icon>contact_mail</v-icon>
          </v-list-item-action>
          <v-list-item-content>
            <v-list-item-title>Contact</v-list-item-title>
          </v-list-item-content>
        </v-list-item>

    <v-list-group 
    sub-group
    prepend-icon="keyboard_arrow_down"
    value="true"
    no-action
      >
        <template v-slot:activator>
            <v-list-item-content> 
                <v-list-item-title>Daftar Dusun</v-list-item-title>
            </v-list-item-content>
        </template>
        <v-list-item-group v-model="menu2" mandatory>
        <v-list-item 
            v-for="(dusun, i) in dataDusun"
            :key="i"
            link
            @click="test(dusun)" 
          >
            <v-list-item-title v-text="dusun.name"></v-list-item-title>
            <v-list-item-icon>
              <v-icon>home</v-icon>
            </v-list-item-icon>
          </v-list-item>
        </v-list-item-group>

    </v-list-group>

        </v-list-item-group>
      </v-list>
    </v-navigation-drawer>

    <v-app-bar
      app
      color="indigo"
      dark
    >
      <v-app-bar-nav-icon @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
      <v-toolbar-title>Desa Kenteng</v-toolbar-title>
    </v-app-bar>

    <v-content>
      <v-container
        fluid
      >

        <v-row
          align-center
          justify-center
        >

        <v-col cols="12" v-show="content=='home'">
          <v-carousel>
            <v-carousel-item
              v-for="(carousel, i) in carousels"
              :key="i"
            >
              <v-sheet
                height="100%"
                tile
              >
                <v-row >
                <v-col cols="12">                
<v-img
      class="white--text"
      height="400px"
      :src="carousel.image_url"
    >
      <v-card-title class="align-end fill-height">{{carousel.name}}</v-card-title>
    </v-img>
  </v-col>
                </v-row>
              </v-sheet>
            </v-carousel-item>
        </v-carousel>
  <v-divider></v-divider>

        <v-row>
             <v-col cols="6">
          <apexchart type=pie :options="dataPenduduk.chartOptions" :series="dataPenduduk.series"></apexchart>

          </v-col>
          <v-col cols="6">
                <apexchart type=bar :options="dataByGender.chartOptions" :series="dataByGender.series" />

          </v-col>

        </v-row>
 <!-- <apexchart type=bar height=350 :options="chartOptions" :series="series" / -->
          <v-row>
            <v-col cols="6">
              <apexchart type=bar :options="dataByAgama.chartOptions" :series="dataByAgama.series" />
            </v-col>
             <v-col cols="6">
                <apexchart type=bar :options="dataByGoldar.chartOptions" :series="dataByGoldar.series" />

          </v-col>
          </v-row>

           <v-row>
            <v-col cols="12">
              <apexchart type=bar :options="dataByPendidikan.chartOptions" :series="dataByPendidikan.series" />
            </v-col>
            <v-col cols="12">
              <apexchart type=bar :options="dataByUmur.chartOptions" :series="dataByUmur.series" />
            </v-col>
          </v-row>


          </v-col> <!--anjir-->

          <v-col cols="12" v-show="content=='map'">

            <div class="google-map" id="map">
              
            </div>


          </v-col>
          
        </v-row>
      </v-container>
    </v-content>
    <v-footer
      color="indigo"
      app
    >
      <span class="white--text">&copy; 2019 Tim KKN ALT 2A UNNES Tahun 2019</span>
    </v-footer>
  </v-app>
</template>

<script>
  import {dataPendudukbyGender} from "../chartOptions/dataPendudukbyGender.js";
  import {dataPendudukbyAgama} from "../chartOptions/dataPendudukbyAgama.js";
  import {dataPendudukByGoldar} from "../chartOptions/dataPendudukByGoldar.js";
  import {dataPendudukByPendidikan} from "../chartOptions/dataPendudukByPendidikan.js";
  import {dataPendudukByUmur} from "../chartOptions/dataPendudukByUmur.js";
  export default {

    props: {
      source: String,
      dataDusun: Array,
      name: String

    },
    async mounted() {
        this.content="home";
        this.latLong.lat = this.dataDusun[0].Latitude;
        this.latLong.long = this.dataDusun[0].Longitude;
        this.home();
        //this.initMap();
    },
    data: function(){
      //name: 'google-map',
      return {
        dataPenduduk:{
            series: [],
            chartOptions: {
               title: {
            text: 'Persentase Jumlah Penduduk'
          },
              labels: [],
              chart: {
                toolbar: {
                  show: true
                },
                zoom: {
                  enabled: true
                }
              }
            }
        },
        dataByGender:{
          chartOptions:dataPendudukbyGender.chartOptions,
          series:dataPendudukbyGender.series
        },
        dataByAgama:{
          chartOptions:dataPendudukbyAgama.chartOptions,
          series:dataPendudukbyAgama.series
        },
        dataByGoldar:{
          chartOptions:dataPendudukByGoldar.chartOptions,
          series:dataPendudukByGoldar.series
        },
        dataByPendidikan:{
           chartOptions:dataPendudukByPendidikan.chartOptions,
            series:dataPendudukByPendidikan.series
        },
        dataByUmur:{
          chartOptions:dataPendudukByUmur.chartOptions,
            series:dataPendudukByUmur.series
        },
        menu2: -1,
        menu1: 0,
        drawer: null,
        latLong:{
          lat:null,
          long:null
        },
        content:'map',
        colors: [
          'primary',
          'secondary',
          'yellow darken-2',
          'red',
          'orange',
        ],
        carousels:[]
      }
      //mapName: this.name + "-map",
    },
    methods:{
        test:function(data){
            this.content = 'map';
            console.log(this.content);
            this.latLong.lat = data.Latitude;
            this.latLong.long = data.Longitude;
            this.initMap(); 
            console.log(this.latLong.lat);
        },
        home:function(){
            this.content="home";
            axios.get('/carousel').then((response)=>{
              console.log(response.data);
              this.carousels=response.data;
            });
            axios.get('/dataPenduduk').then((response)=>{
                this.dataPenduduk.series = [];
                let labels = [];
                response.data.forEach((value,key)=>{
                  labels.push(value.name);
                  this.dataPenduduk.series.push(value.total);

                });
                 this.dataPenduduk.chartOptions = {...this.dataPenduduk.chartOptions, ...{
                        labels:labels
                      }
                  }
                console.log(this.dataPenduduk.chartOptions.labels);
               
            });
            axios.get('/dataPendudukByGender').then((response)=>{
              //console.log(this.dataPendudukByGender);
              let l=[];
              let p=[];
              let categories=[];
              response.data.forEach((value,key)=>{
                  l.push(value.total.L);
                  p.push(value.total.P);
                  categories.push(value.name);
              });
              this.dataByGender.series = [
                {name:'Laki-laki',data:l},
                {name:'Perempuan',data:p}
              ];
               this.dataByGender.chartOptions = {...this.dataByGender.chartOptions, ...{
                        xaxis: {
                          categories: categories,
                        }
                      }
                  }
              console.log(this.dataByGender.series)
            });

            axios.get('/dataPendudukByAgama').then((response)=>{
                 this.dataByAgama.series = [];
                 let data_series=[];
                let categories=[];
                response.data.forEach((value,key)=>{
                    if(value.total>0){
                      data_series.push(value.total);
                      categories.push(value.name);
                    }
                });
                //console.log(categories);  
                this.dataByAgama.series.push({data:data_series});
                this.dataByAgama.chartOptions = {...this.dataByAgama.chartOptions, ...{
                        xaxis: {
                          categories: categories,
                        }
                      }
                  }

            });
            axios.get('/dataPendudukByGoldar').then((response)=>{
              let series = {L:[], P:[]};
              let categories = [];

              response.data.forEach((value,key)=>{
                  if(value.jumlah.L>0 && value.jumlah.P>0 && value.name!='-'){
                     categories.push(value.name);
                     series.L.push(value.jumlah.L);
                     series.P.push(value.jumlah.P);
                  }
                });
              //series.L.pop();series.P.pop();

              this.dataByGoldar.series = [
                {name:'Laki-laki', data:series.L},
                {name:'Perempuan', data:series.P}
              ];

               this.dataByGoldar.chartOptions = {...this.dataByGoldar.chartOptions, ...{
                        xaxis: {
                          categories: categories,
                        }
                      }
                  }

            });
            axios.get('/dataPendudukByPendidikan').then((response)=>{
              //let series = [];
              let categories = [];
              let series=response.data.pendidikan;
              response.data.pendidikan.forEach((value,key)=>{
                    series[key].data=[];
                });

              response.data.based_pendidikan.forEach((value,key)=>{
                  //series.push({})
                 value.data.forEach((value2,key2)=>{
                    series[key2].data.push(value2.jumlah_data);
                  }); 
                 categories.push(value.name);
              });
              console.log(series);
                this.dataByPendidikan.series=series;
               this.dataByPendidikan.chartOptions = {...this.dataByPendidikan.chartOptions, ...{
                        xaxis: {
                          categories: categories,
                        }
                      }
                  }

            });
            axios.get('/dataPendudukByUmur').then((response)=>{
              //let series = [];
              let categories = [];
              let series=response.data.umur;
              response.data.umur.forEach((value,key)=>{
                    series[key].data=[];
                });

              response.data.based_umur.forEach((value,key)=>{
                  //series.push({})
                 value.data.forEach((value2,key2)=>{
                    series[key2].data.push(value2.jumlah_data);
                  }); 
                 categories.push(value.name);
              });
              console.log(series);
                this.dataByUmur.series=series;
               this.dataByUmur.chartOptions = {...this.dataByUmur.chartOptions, ...{
                        xaxis: {
                          categories: categories,
                        }
                      }
                  }

            });
        },
        initMap:function(){
          console.log(this.dataDusun);     
          const element = document.getElementById("map")
          const options = {
            zoom: 16,
            center: new google.maps.LatLng(this.latLong.lat,this.latLong.long),
            mapTypeId: google.maps.MapTypeId.HYBRID 
          }
          const map = new google.maps.Map(element, options)

          console.log(element)  
      },
    },
    
  }
</script>
<style scoped>
.google-map {
  width: 100%;
  height: 600px;
  margin: auto;
  background: gray;
}
</style>