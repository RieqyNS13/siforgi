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
          v-show="content=='home'"
        >

        <v-col cols="12" >
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
            <v-col cols="6">
              <apexchart type=bar height="600" :options="dataByPendidikan.chartOptions" :series="dataByPendidikan.series" />
            </v-col>
            <v-col cols="6">
              <v-select
              return-object
          :items="dataDusun2"
           v-model="select"
          item-value="id"
          item-text="name"
          label="Pilih Dusun yang Akan Ditampilkan Piramida Penduduknya"
        ></v-select>

              <apexchart type=bar height="600" :options="dataByPiramidaPenduduk.chartOptions" :series="dataByPiramidaPenduduk.series" />
            </v-col>
          </v-row>

           <v-row>
            <v-col cols="12">
              <apexchart type=bar height="600" :options="dataByUmur.chartOptions" :series="dataByUmur.series" />

            </v-col>
            
          </v-row>

          </v-col> <!--anjir-->

         
        </v-row>

         <v-row
          align-center
          justify-center
          v-show="content=='map'"
        >
        <v-col cols="12" >

            <div class="google-map" id="map">
              
            </div>

          </v-col>

       <v-col cols="12">
         <v-expansion-panels
     multiple
      v-model="panelJenisLokasi"
    >
      <v-expansion-panel
        v-for="(item,i) in dataJenisLokasi"
        :key="i"

      >
        <v-expansion-panel-header>{{item.name}}</v-expansion-panel-header>
        <v-expansion-panel-content>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </v-expansion-panel-content>
      </v-expansion-panel>
    </v-expansion-panels>
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
  import {dataPendudukbyGender} from "../charts/dataPendudukbyGender.js";
  import {dataPendudukbyAgama} from "../charts/dataPendudukbyAgama.js";
  import {dataPendudukByGoldar} from "../charts/dataPendudukByGoldar.js";
  import {dataPendudukByPendidikan} from "../charts/dataPendudukByPendidikan.js";
  import {dataPendudukByUmur} from "../charts/dataPendudukByUmur.js";
  import {piramidaPenduduk} from "../charts/piramidaPenduduk.js";
  export default {

    props: {
      source: String,
      dataDusun: Array,
      name: String,
      dataJenisLokasi: Array
    },
    async mounted() {
        console.log("sempak "+this.dataDusun);
        this.dataJenisLokasi.forEach((item,key)=>{
          this.panelJenisLokasi.push(key);
        });
        this.content="home";
        this.latLong.lat = this.dataDusun[0].Latitude;
        this.latLong.long = this.dataDusun[0].Longitude;
        this.home();
        this.dataDusun2 = Array.from(this.dataDusun)
       this.dataDusun2.unshift({id:-1, name:"Semua Dusun"});
        console.log(this.dataDusun2);
        this.select = this.dataDusun2[0]
        //this.initMap();
    },
    data: function(){
      //name: 'google-map', v-model-
      return {
        dataDusun2:[],
         select: null,
        items: [],
        panelJenisLokasi:[],
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
        dataByPiramidaPenduduk:{
           chartOptions:piramidaPenduduk.chartOptions,
            series:piramidaPenduduk.series
        },
        markers:[],
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
    watch:{
      select:function(val){
        this.piramida(val);
        //console.log(val);
      }
    },
    methods:{
        asu:function(data){
          console.log(this.select)
        },
        piramida:function(dusun){
            console.log(dusun.id+" "+dusun.name);
            axios.get('/piramidaPenduduk/'+dusun.id).then((response)=>{
              console.log(response.data);
              let categories = [];
                let series=[
                  {name:'Laki-laki', data:[]},
                  {name:'Perempuan', data:[]},
                ];
              
              response.data.forEach((value,key)=>{
                  series[0].data.push(value.data.L);
                  series[1].data.push(value.data.P*-1);
                  series
                 categories.push(value.name);
              });
              this.dataByPiramidaPenduduk.series=series;
              this.dataByPiramidaPenduduk.chartOptions = {...this.dataByPiramidaPenduduk.chartOptions, ...{
                        xaxis: {
                          categories: categories,
                        }
                      }
                  }

            });
        },
        test:function(data){
            //console.log("sempak")  
            this.content = 'map';
            console.log(this.content);
            this.latLong.lat = data.Latitude;
            this.latLong.long = data.Longitude;

            this.initMap(); 
            //console.log(this.latLong.lat);
        },
        addMarker:function(location, map) {
            var contentString = "<div style='float:left'><img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQo__msLhE89yumL5XTsa3REU0vrKgsN1myKOalFUY9Z7ZYbV_e'></div><div style='float:right; padding: 10px;'><b>Title</b><br/>Here’s the fastest way to check the status of your shipment. No need to call Customer Service – our online results give you real-time, detailed progress as your shipment speeds through the DHL network.<br/> City,Country</div>";


            var infowindow = new google.maps.InfoWindow({
                content: contentString
              });
             var pin = {
              path: MAP_PIN,
              fillColor: 'yellow',
              fillOpacity: 0.8,
              scale: 1,
              strokeColor: 'gold',
              strokeWeight: 1,
            
              labelOrigin: new google.maps.Point(0,-20)
            };

            // var marker = new MarkerWithLabel({
            //   position: location,
            //   map: map,
            //   icon:pin,
            //   animation: google.maps.Animation.BOUNCE,

            //   draggable: true,
            //   raiseOnDrag: true,
            //   labelContent: "A",
            //   labelAnchor: new google.maps.Point(3, 30),
            //   labelInBackground: false
            // });
              var marker = new google.maps.Marker({
                position: location,
                draggable: true,
                //animation: google.maps.Animation.BOUNCE,
                map: map,
                map_icon_label: '<i class="fab fa-500px"></i>',

                icon:{
                  path: MAP_PIN,
                  fillColor: '#ff00ff',
                  fillOpacity: 1,
                  strokeColor: '',
                  strokeWeight: 0
                },
              });
              marker.addListener('click', function() {
                infowindow.open(map, marker);
              });
              this.markers.push(marker);
              console.log(marker.getPosition().lat()+"\n"+marker.getPosition().lng());
        },
        home:function(){
            this.content="home";
            axios.get('/carousel').then((response)=>{
              //console.log(response.data);
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
               // console.log(this.dataPenduduk.chartOptions.labels);
               
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
              //console.log(this.dataByGender.series)
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
            // axios.get('/piramidaPenduduk').then((response)=>{
            //   let categories = [];
            //     let series=[
            //       {name:'Laki-laki', data:[]},
            //       {name:'Perempuan', data:[]},
            //     ];
              
            //   response.data.forEach((value,key)=>{
            //       series[0].data.push(value.data.L);
            //       series[1].data.push(value.data.P*-1);
            //       series
            //      categories.push(value.name);
            //   });
            //   this.dataByPiramidaPenduduk.series=series;
            //   this.dataByPiramidaPenduduk.chartOptions = {...this.dataByPiramidaPenduduk.chartOptions, ...{
            //             xaxis: {
            //               categories: categories,
            //             }
            //           }
            //       }

            // });
        },
        initMap:function(){
          
          const element = document.getElementById("map")
          const options = {
            zoom: 16,
            center: new google.maps.LatLng(this.latLong.lat,this.latLong.long),
            mapTypeId: google.maps.MapTypeId.HYBRID 
          }
          const map = new google.maps.Map(element, options)
           google.maps.event.addListener(map, 'click', (event)=> {
            this.addMarker(event.latLng, map);
          });
                 
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
 .map-icon-label i {
                font-size: 24px;
                color: #FFFFFF;
                line-height: 55px;
                text-align: center;
                white-space: nowrap;
            }
</style>
