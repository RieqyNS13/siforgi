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
            @click="changeMap(dusun)" 
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
      <v-expansion-panel class="text-truncate"
        v-for="(item,i) in dataJenisLokasi"
        :key="i"

      >
        <v-expansion-panel-header>
           <v-list-item two-line>
            <v-list-item-content>
                <v-container>
                  <v-row>
                    <v-col cols='1'>
                         <v-img :src="getImagePath(item)" aspect-ratio="1" height=50 width=50 class="grey lighten-2"></v-img>
                    </v-col>
                      <v-col cols='11'>
                         <v-list-item-title>{{item.name}}</v-list-item-title>
                         <v-list-item-subtitle>{{item.description}}</v-list-item-subtitle>
                    </v-col>
                  </v-row>
                </v-container>
             
            </v-list-item-content>
           </v-list-item>


        </v-expansion-panel-header>
        <v-expansion-panel-content>
       <!--  <v-img :src="getImagePath(item)"
          aspect-ratio="1" height=50 width=50 class="grey lighten-2"></v-img> -->

<v-divider></v-divider>
               <v-list two-line>
      <v-list-item-group
        v-model="selected"
        multiple
      >
        <template v-for="(location, index) in item.data">
          <v-list-item :key="location.title" @click="klikLokasi(i, index)">
            <template v-slot:default="{ active, toggle }">
              <v-list-item-content>
                <v-list-item-title v-text="location.name"></v-list-item-title>
                <v-list-item-subtitle class="text--primary" v-text="location.description"></v-list-item-subtitle>
                <!-- <v-list-item-subtitle v-text="item.subtitle"></v-list-item-subtitle> -->
              </v-list-item-content>

         
            </template>
          </v-list-item>

          <v-divider
            v-if="index + 1 < item.data.length"
            :key="index"
          ></v-divider>
        </template>
      </v-list-item-group>
    </v-list>

          <!-- <span v-for="(item2, i2) in item.data">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </span> -->
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
        // this.dataJenisLokasi.forEach((item,key)=>{
        //   this.panelJenisLokasi.push(key);
        // });
        this.content="home";
        this.latLong.lat = this.dataDusun[0].Latitude;
        this.latLong.long = this.dataDusun[0].Longitude;
        this.home();
        //this.dataDusun.unshift({id:-1, name:"Semua Dusun"})
        this.dataDusun2 = Array.from(this.dataDusun)
        console.log("sa");
        console.log(this.dataDusun);
        //this.dataDusun2.unshift({id:-1, name:"Semua Dusun"});
        this.select = this.dataDusun2[0];
       
        //console.log(this.dataJenisLokasi);


        //this.initMap();
    },
    data: function(){
      //name: 'google-map', v-model-
      return {
         selected: [],
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
        current:{
          Map:null,
          Dusun:{
            name:"Ampelgading"
          }
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

        console.log( this.dataDusun);
      },
      selected:function(val){
          //console.log(val);
      }
    },
    methods:{
        asu:function(data){
          console.log(this.select)
        },
        getImagePath:function(data){
          if(data.name=="UMKM")return "img/umkm/"+this.current.Dusun.name+'.png';
          else if(data.name=="Potensi Desa")return "img/potensi_desa/"+this.current.Dusun.name+'.png';
          else return "img/perangkat_desa/"+this.current.Dusun.name+'.png';
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
        klikLokasi:function(jenis_index, lokasi_index){
          this.dataJenisLokasi[jenis_index].is_active[lokasi_index]=!this.dataJenisLokasi[jenis_index].is_active[lokasi_index];
          if(this.dataJenisLokasi[jenis_index].is_active[lokasi_index]){
            this.dataJenisLokasi[jenis_index].markers[lokasi_index].setAnimation(google.maps.Animation.BOUNCE);
          }else{
            this.dataJenisLokasi[jenis_index].markers[lokasi_index].setAnimation(google.maps.Animation.STOP);
          }
          //window.scrollTo(0,0);
          // this.dataJenisLokasi.forEach((item,key)=>{
          //   item.markers.forEach((item2,key2)=>{
          //     if(item2.getAnimation() !== null)item2. (null);
          //   });
          // });
          // let map=this.dataJenisLokasi[jenis_index].markers[lokasi_index];
          // if(map.getAnimation() === null){
          //  alert('as');
          //   map.setAnimation(google.maps.Animation.BOUNCE);
          // }
        },
        changeMap:function(data){
            //console.log("sempak")  
            this.content = 'map';
            console.log(data);
            this.latLong.lat = data.Latitude;
            this.latLong.long = data.Longitude;
            this.current.Dusun = data;
            this.dataJenisLokasi.forEach((value,key)=>{
              value.data=[];
              value.markers=[];
              value.is_active=[];
            });
            this.panelJenisLokasi=[];
            this.initMap(); 
            this.loadMarkers(data);
            // this.dataJenisLokasi.forEach((item,key)=>{
            //   this.panelJenisLokasi.push(key);
            // });
            //console.log(this.dataJenisLokasi);
        },
        loadMarkers:function(dusun){

            axios.get('/getLocations/'+dusun.id).then((response)=>{
              this.dataJenisLokasi.forEach((value,key)=>{
                  response.data.forEach((value2,key2)=>{
                    if(value.id==value2.jenis.id){
                        value.data.push(value2)
                        let marker = this.addMarker2(value2)
                        value.markers.push(marker);
                        value.is_active.push(false);
                    }
                   
                  });
              });
              
               
            });
            console.log("marker");
            console.log(this.dataJenisLokasi);
           // console.log(this.dataJenisLokasi);
        },
        addMarker2:function(data){
          let folder;
          if(data.jenis.name=="Perangkat Desa")folder="perangkat_desa";
          else if(data.jenis.name=="Potensi Desa")folder="potensi_desa";
          else folder="umkm";
          let marker = new google.maps.Marker({
                position: new google.maps.LatLng(data.Latitude,data.Longitude),
                //draggable: true,
                //animation: google.maps.Animation.BOUNCE,
                map: this.current.Map,
                icon:'img/'+folder+'/'+data.dusun.name+'.png',
            });
          return marker;
        },
        addMarker:function(location, map) {
            var contentString = "<div style='float:left'><img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQo__msLhE89yumL5XTsa3REU0vrKgsN1myKOalFUY9Z7ZYbV_e'></div><div style='float:right; padding: 10px;'><b>Title</b><br/>Here’s the fastest way to check the status of your shipment. No need to call Customer Service – our online results give you real-time, detailed progress as your shipment speeds through the DHL network.<br/> City,Country</div>";

              //if(this.current.Dusun.

              var infowindow = new google.maps.InfoWindow({
                content: contentString
              });
              
              var marker = new google.maps.Marker({
                position: location,
                draggable: true,
                //animation: google.maps.Animation.BOUNCE,
                map: map,
                icon:'img/perangkat_desa/Ampelgading.png',
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
          this.current.Map=map;
           google.maps.event.addListener(map, 'click', (event)=> {
            this.addMarker(event.latLng, map);
            console.log(event.latLng);
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
.map-icon-label .map-icon {
  font-size: 24px;
  color: #FFFFFF;
  line-height: 48px;
  text-align: center;
  white-space: nowrap;
}
</style>
