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

        <v-layout
          align-center
          justify-center
        >

        <v-flex xs12 v-show="content=='home'">
          <v-carousel>
            <v-carousel-item
              v-for="(carousel, i) in carousels"
              :key="i"
            >
              <v-sheet
                height="100%"
                tile
              >
                <v-layout >
                <v-flex xs12>                
<v-img
      class="white--text"
      height="400px"
      :src="carousel.image_url"
    >
      <v-card-title class="align-end fill-height">{{carousel.name}}</v-card-title>
    </v-img>
  </v-flex>
                </v-layout>
              </v-sheet>
            </v-carousel-item>
        </v-carousel>
  <v-divider></v-divider>

        <v-layout>
             <v-flex xs6>
          <apexchart type=pie :options="dataPenduduk.chartOptions" :series="dataPenduduk.series"></apexchart>

          </v-flex>
          <!-- <v-flex xs6>
          <apexchart width="500" type="bar" :options="options" :series="series"></apexchart>

          </v-flex> -->
        </v-layout>

          </v-flex>

          <v-flex xs12 v-show="content=='map'">

            <div class="google-map" id="map">
              
            </div>


          </v-flex>
          
        </v-layout>
      </v-container>
    </v-content>
    <v-footer
      color="indigo"
      app
    >
      <span class="white--text">&copy; 2019</span>
    </v-footer>
  </v-app>
</template>

<script>
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
              labels: [],
              responsive: [{
                breakpoint: 480,
                options: {
                  chart: {
                    width: 200
                  },
                  legend: {
                    position: 'bottom'
                  }
                }
              }]
            }
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