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
        v-model="item.selected"
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
  var infowindow;
  var contentString;
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
        addBorders:function(){
          let borders=[
            {dusun:'Karanglo', data:[ 
              {lat: -7.219053, lng:  110.397717},
              {lat: -7.219753, lng:  110.396842},
              {lat: -7.221063, lng:  110.395895},
              {lat: -7.222178, lng:  110.395470},
              {lat: -7.224072, lng:  110.395185},
              {lat: -7.225620, lng:  110.395025},
              {lat: -7.225789, lng:  110.394919},
              {lat: -7.226497, lng:  110.396213},
              {lat: -7.227348, lng:  110.398907},
              {lat: -7.227262, lng:  110.398950},
              {lat: -7.226512, lng:  110.399759},
              {lat: -7.226221, lng:  110.400535},
              {lat: -7.225444, lng:  110.401122},
              {lat: -7.223993, lng:  110.401279},
              {lat: -7.223184, lng:  110.401796},
              {lat: -7.223045, lng:  110.402353},
              {lat: -7.223066, lng:  110.402835},
              {lat: -7.223937, lng:  110.405084},
              {lat: -7.224039, lng:  110.406610},
              {lat: -7.223829, lng:  110.407337},
              {lat: -7.223554, lng:  110.407827},
              {lat: -7.222319, lng:  110.405648},
              {lat: -7.222471, lng:  110.405390},
              {lat: -7.222764, lng:  110.405135},
              {lat: -7.223050, lng:  110.404680},
              {lat: -7.222342, lng:  110.403386},
              {lat: -7.222479, lng:  110.402966},
              {lat: -7.221903, lng:  110.402862},
              {lat: -7.221747, lng:  110.402518},
              {lat: -7.222043, lng:  110.401905},
              {lat: -7.221278, lng:  110.401272},
              {lat: -7.220829, lng:  110.401070},
              {lat: -7.220946, lng:  110.400365},
              {lat: -7.220699, lng:  110.400185},
              {lat: -7.219784, lng:  110.400500},
              {lat: -7.219379, lng:  110.400101},
              {lat: -7.219293, lng:  110.399627},
              {lat: -7.219777, lng:  110.399030},
              {lat: -7.219751, lng:  110.398357},
              {lat: -7.219169, lng:  110.397887},
            ], color:'#028daf'},
            {dusun:'Jurang', data:[ 
              {lat: -7.223053, lng:  110.402709},
              {lat: -7.223221, lng:  110.401752},
              {lat: -7.224005, lng:  110.401212},
              {lat: -7.225573, lng:  110.401033},
              {lat: -7.226090, lng:  110.400546},
              {lat: -7.226715, lng:  110.399408},
              {lat: -7.227271, lng:  110.398938},
              {lat: -7.228651, lng:  110.399064},
              {lat: -7.229405, lng:  110.399678},
              {lat: -7.230792, lng:  110.400330},
              {lat: -7.231658, lng:  110.400420},
              {lat: -7.232595, lng:  110.400166},
              {lat: -7.232977, lng:  110.400529},
              {lat: -7.232924, lng:  110.400856},
              {lat: -7.232985, lng:  110.401221},
              {lat: -7.233426, lng:  110.401617},
              {lat: -7.234491, lng:  110.401832},
              {lat: -7.234844, lng:  110.402062},
              {lat: -7.235648, lng:  110.402356},
              {lat: -7.235834, lng:  110.402725},
              {lat: -7.233633, lng:  110.403920},
              {lat: -7.230912, lng:  110.404967},
              {lat: -7.228211, lng:  110.408466},
              {lat: -7.227523, lng:  110.408633},
              {lat: -7.225765, lng:  110.409555},
              {lat: -7.225208, lng:  110.409640},
              {lat: -7.224769, lng:  110.409935},
              {lat: -7.224114, lng:  110.410055},
              {lat: -7.224044, lng:  110.409406},
              {lat: -7.223509, lng:  110.408590},
              {lat: -7.223558, lng:  110.407821},
              {lat: -7.223874, lng:  110.407306},
              {lat: -7.224012, lng:  110.406660},
              {lat: -7.224024, lng:  110.405637},
              {lat: -7.223703, lng:  110.404264},
              {lat: -7.223176, lng:  110.403104},
              {lat: -7.223029, lng:  110.402384},
              {lat: -7.223222, lng:  110.401808},
            ], color:'#af1d8a'},
            {dusun:'Kenteng', data:[ 
              {lat: -7.228258, lng:  110.393571},
              {lat: -7.228676, lng:  110.393347},
              {lat: -7.229051, lng:  110.392520},
              {lat: -7.229209, lng:  110.392070},
              {lat: -7.229253, lng:  110.391759},
              {lat: -7.229782, lng:  110.392129},
              {lat: -7.230410, lng:  110.392843},
              {lat: -7.231744, lng:  110.393494},
              {lat: -7.233296, lng:  110.394416},
              {lat: -7.233377, lng:  110.394411},
              {lat: -7.233164, lng:  110.394579},
              {lat: -7.232695, lng:  110.394698},
              {lat: -7.232853, lng:  110.395035},
              {lat: -7.233109, lng:  110.395277},
              {lat: -7.232429, lng:  110.395627},
              {lat: -7.232339, lng:  110.396005},
              {lat: -7.232356, lng:  110.396371},
              {lat: -7.231861, lng:  110.397010},
              {lat: -7.231117, lng:  110.397448},
              {lat: -7.230767, lng:  110.397939},
              {lat: -7.230904, lng:  110.398298},
              {lat: -7.231322, lng:  110.398548},
              {lat: -7.231736, lng:  110.399014},
              {lat: -7.232200, lng:  110.399773},
              {lat: -7.232592, lng:  110.400179},
              {lat: -7.231774, lng:  110.400424},
              {lat: -7.230892, lng:  110.400380},
              {lat: -7.229862, lng:  110.399985},
              {lat: -7.229517, lng:  110.399776},
              {lat: -7.229108, lng:  110.399405},
              {lat: -7.229089, lng:  110.397359},
              {lat: -7.228965, lng:  110.396121},
              {lat: -7.228801, lng:  110.395588},
              {lat: -7.228669, lng:  110.395003},
              {lat: -7.228629, lng:  110.394552},
              {lat: -7.228255, lng:  110.393576},
            ], color:'#ffc315'},
            {dusun:'Gelaran', data:[ 
              {lat: -7.229232, lng:  110.391748},
              {lat: -7.229140, lng:  110.390325},
              {lat: -7.229111, lng:  110.389143},
              {lat: -7.229208, lng:  110.388596},
              {lat: -7.229955, lng:  110.387460},
              {lat: -7.231144, lng:  110.386836},
              {lat: -7.230805, lng:  110.387701},
              {lat: -7.230963, lng:  110.387997},
              {lat: -7.231229, lng:  110.388186},
              {lat: -7.231656, lng:  110.388231},
              {lat: -7.232048, lng:  110.388124},
              {lat: -7.232253, lng:  110.388377},
              {lat: -7.232218, lng:  110.388621},
              {lat: -7.232343, lng:  110.388884},
              {lat: -7.232612, lng:  110.389085},
              {lat: -7.232855, lng:  110.389069},
              {lat: -7.233118, lng:  110.390128},
              {lat: -7.233517, lng:  110.390332},
              {lat: -7.234380, lng:  110.390288},
              {lat: -7.234664, lng:  110.390180},
              {lat: -7.234664, lng:  110.390180},
              {lat: -7.234664, lng:  110.390180},
              {lat: -7.234664, lng:  110.390180},
              {lat: -7.234599, lng:  110.391110},
              {lat: -7.235128, lng:  110.391866},
              {lat: -7.236084, lng:  110.391843},
              {lat: -7.236378, lng:  110.392140},
              {lat: -7.236354, lng:  110.392779},
              {lat: -7.235887, lng:  110.393410},
              {lat: -7.233369, lng:  110.394428},
              {lat: -7.230382, lng:  110.392891},
              {lat: -7.229276, lng:  110.391815},
            ], color:'#97faf4'},
            {dusun:'Clowok', data:[ 
              {lat: -7.224864, lng:  110.392136},
              {lat: -7.225569, lng:  110.392263},
              {lat: -7.226008, lng:  110.392435},
              {lat: -7.226416, lng:  110.392511},
              {lat: -7.226896, lng:  110.392648},
              {lat: -7.227355, lng:  110.392889},
              {lat: -7.227761, lng:  110.393168},
              {lat: -7.227909, lng:  110.393275},
              {lat: -7.228250, lng:  110.393571},
              {lat: -7.228265, lng:  110.393563},
              {lat: -7.228406, lng:  110.393944},
              {lat: -7.228626, lng:  110.394524},
              {lat: -7.228666, lng:  110.395008},
              {lat: -7.228797, lng:  110.395602},
              {lat: -7.228965, lng:  110.396154},
              {lat: -7.229099, lng:  110.397264},
              {lat: -7.229094, lng:  110.397959},
              {lat: -7.229105, lng:  110.398827},
              {lat: -7.229093, lng:  110.399388},
              {lat: -7.228630, lng:  110.399062},
              {lat: -7.228246, lng:  110.398997},
              {lat: -7.227691, lng:  110.398926},
              {lat: -7.227394, lng:  110.398947},
              {lat: -7.227229, lng:  110.398434},
              {lat: -7.226985, lng:  110.397500},
              {lat: -7.226512, lng:  110.396214},
              {lat: -7.226262, lng:  110.395712},
              {lat: -7.225786, lng:  110.394907},
              {lat: -7.225961, lng:  110.394671},
              {lat: -7.225669, lng:  110.393856},
              {lat: -7.225441, lng:  110.393343},
              {lat: -7.225160, lng:  110.392730},
              {lat: -7.224850, lng:  110.392140},
            ], color:'#61ad02'},
            {dusun:'Ampelgading', data:[ 
              {lat: -7.222542, lng:  110.387527},
              {lat: -7.223198, lng:  110.387379},
              {lat: -7.224229, lng:  110.386293},
              {lat: -7.229151, lng:  110.385686},
              {lat: -7.229799, lng:  110.385853},
              {lat: -7.230132, lng:  110.386636},
              {lat: -7.230771, lng:  110.386856},
              {lat: -7.231108, lng:  110.386814},
              {lat: -7.229962, lng:  110.387485},
              {lat: -7.229390, lng:  110.388215},
              {lat: -7.229120, lng:  110.389111},
              {lat: -7.229115, lng:  110.390449},
              {lat: -7.229248, lng:  110.391693},
              {lat: -7.228730, lng:  110.393334},
              {lat: -7.228233, lng:  110.393556},
              {lat: -7.226971, lng:  110.392656},
              {lat: -7.224851, lng:  110.392129},
              {lat: -7.222993, lng:  110.388353},
            ], color:'#f26588'},
            {dusun:'Golak', data:[ 
              {lat: -7.217142, lng:  110.389265},
              {lat: -7.218226, lng:  110.389337},
              {lat: -7.218481, lng:  110.389220},
              {lat: -7.218671, lng:  110.388909},
              {lat: -7.219617, lng:  110.388534},
              {lat: -7.220600, lng:  110.387787},
              {lat: -7.222513, lng:  110.387509},
              {lat: -7.223350, lng:  110.388823},
              {lat: -7.223583, lng:  110.389425},
              {lat: -7.224022, lng:  110.390270},
              {lat: -7.224238, lng:  110.390925},
              {lat: -7.224794, lng:  110.392025},
              {lat: -7.225129, lng:  110.392634},
              {lat: -7.225450, lng:  110.393394},
              {lat: -7.225721, lng:  110.394032},
              {lat: -7.225931, lng:  110.394608},
              {lat: -7.225639, lng:  110.395048},
              {lat: -7.225107, lng:  110.395122},
              {lat: -7.224442, lng:  110.395137},
              {lat: -7.223091, lng:  110.395309},
              {lat: -7.222177, lng:  110.395452},
              {lat: -7.221095, lng:  110.395890},
              {lat: -7.219745, lng:  110.396858},
              {lat: -7.219298, lng:  110.397317},
              {lat: -7.219410, lng:  110.396799},
              {lat: -7.219240, lng:  110.396379},
              {lat: -7.218837, lng:  110.396091},
              {lat: -7.218492, lng:  110.395965},
              {lat: -7.218303, lng:  110.395774},
              {lat: -7.218294, lng:  110.395661},
              {lat: -7.218403, lng:  110.395496},
              {lat: -7.218661, lng:  110.395339},
              {lat: -7.219001, lng:  110.395107},
              {lat: -7.219015, lng:  110.394747},
              {lat: -7.218710, lng:  110.394567},
              {lat: -7.218260, lng:  110.394489},
              {lat: -7.218067, lng:  110.394220},
              {lat: -7.218570, lng:  110.394111},
              {lat: -7.218624, lng:  110.393980},
              {lat: -7.218379, lng:  110.393498},
              {lat: -7.218372, lng:  110.393098},
              {lat: -7.218375, lng:  110.392799},
              {lat: -7.218248, lng:  110.392488},
              {lat: -7.217735, lng:  110.392252},
              {lat: -7.217609, lng:  110.391966},
              {lat: -7.217623, lng:  110.391713},
              {lat: -7.217826, lng:  110.390826},
              {lat: -7.217486, lng:  110.390444},
              {lat: -7.217722, lng:  110.389856},
              {lat: -7.217745, lng:  110.389759},
              {lat: -7.217161, lng:  110.389337},
            ], color:'#eb1c24'},

          ];
          borders.forEach((item,key)=>{
             let polygon = new google.maps.Polygon({
                paths: borders[key].data,
                strokeColor: borders[key].color,
                strokeOpacity: 0.8,
                strokeWeight: 3,
                fillColor: borders[key].color,
                fillOpacity: 0.35
              });
              polygon.setMap(this.current.Map);
          });
          
         
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
              value.selected=[];
            });
            this.panelJenisLokasi=[];
            this.initMap(); 
            this.loadMarkers(data);
            this.addBorders();
//               let polygon1=[
//              {lat: -7.222542, lng:  110.387527},
// {lat: -7.223198, lng:  110.387379},
// {lat: -7.224229, lng:  110.386293},
// {lat: -7.229151, lng:  110.385686},
// {lat: -7.229799, lng:  110.385853},
// {lat: -7.230132, lng:  110.386636},
// {lat: -7.230771, lng:  110.386856},
// {lat: -7.231108, lng:  110.386814},
// {lat: -7.229962, lng:  110.387485},
// {lat: -7.229390, lng:  110.388215},
// {lat: -7.229120, lng:  110.389111},
// {lat: -7.229115, lng:  110.390449},
// {lat: -7.229248, lng:  110.391693},
// {lat: -7.228730, lng:  110.393334},
// {lat: -7.228233, lng:  110.393556},
// {lat: -7.226971, lng:  110.392656},
// {lat: -7.224851, lng:  110.392129},
// {lat: -7.222993, lng:  110.388353},
//             ];
//             let polygon2=[
//             {lat: -7.219053, lng:  110.397717},
// {lat: -7.219753, lng:  110.396842},
// {lat: -7.221063, lng:  110.395895},
// {lat: -7.222178, lng:  110.395470},
// {lat: -7.224072, lng:  110.395185},
// {lat: -7.225620, lng:  110.395025},
// {lat: -7.225789, lng:  110.394919},
// {lat: -7.226497, lng:  110.396213},
// {lat: -7.227348, lng:  110.398907},
// {lat: -7.227262, lng:  110.398950},
// {lat: -7.226512, lng:  110.399759},
// {lat: -7.226221, lng:  110.400535},
// {lat: -7.225444, lng:  110.401122},
// {lat: -7.223993, lng:  110.401279},
// {lat: -7.223184, lng:  110.401796},
// {lat: -7.223045, lng:  110.402353},
// {lat: -7.223066, lng:  110.402835},
// {lat: -7.223937, lng:  110.405084},
// {lat: -7.224039, lng:  110.406610},
// {lat: -7.223829, lng:  110.407337},
// {lat: -7.223554, lng:  110.407827},
// {lat: -7.222319, lng:  110.405648},
// {lat: -7.222471, lng:  110.405390},
// {lat: -7.222764, lng:  110.405135},
// {lat: -7.223050, lng:  110.404680},
// {lat: -7.222342, lng:  110.403386},
// {lat: -7.222479, lng:  110.402966},
// {lat: -7.221903, lng:  110.402862},
// {lat: -7.221747, lng:  110.402518},
// {lat: -7.222043, lng:  110.401905},
// {lat: -7.221278, lng:  110.401272},
// {lat: -7.220829, lng:  110.401070},
// {lat: -7.220946, lng:  110.400365},
// {lat: -7.220699, lng:  110.400185},
// {lat: -7.219784, lng:  110.400500},
// {lat: -7.219379, lng:  110.400101},
// {lat: -7.219293, lng:  110.399627},
// {lat: -7.219777, lng:  110.399030},
// {lat: -7.219751, lng:  110.398357},
// {lat: -7.219169, lng:  110.397887},
//             ];
//             let polygon3=[
//             {lat: -7.228258, lng:  110.393571},
// {lat: -7.228676, lng:  110.393347},
// {lat: -7.229051, lng:  110.392520},
// {lat: -7.229209, lng:  110.392070},
// {lat: -7.229253, lng:  110.391759},
// {lat: -7.229782, lng:  110.392129},
// {lat: -7.230410, lng:  110.392843},
// {lat: -7.231744, lng:  110.393494},
// {lat: -7.233296, lng:  110.394416},
// {lat: -7.233377, lng:  110.394411},
// {lat: -7.233164, lng:  110.394579},
// {lat: -7.232695, lng:  110.394698},
// {lat: -7.232853, lng:  110.395035},
// {lat: -7.233109, lng:  110.395277},
// {lat: -7.232429, lng:  110.395627},
// {lat: -7.232339, lng:  110.396005},
// {lat: -7.232356, lng:  110.396371},
// {lat: -7.231861, lng:  110.397010},
// {lat: -7.231117, lng:  110.397448},
// {lat: -7.230767, lng:  110.397939},
// {lat: -7.230904, lng:  110.398298},
// {lat: -7.231322, lng:  110.398548},
// {lat: -7.231736, lng:  110.399014},
// {lat: -7.232200, lng:  110.399773},
// {lat: -7.232592, lng:  110.400179},
// {lat: -7.231774, lng:  110.400424},
// {lat: -7.230892, lng:  110.400380},
// {lat: -7.229862, lng:  110.399985},
// {lat: -7.229517, lng:  110.399776},
// {lat: -7.229108, lng:  110.399405},
// {lat: -7.229089, lng:  110.397359},
// {lat: -7.228965, lng:  110.396121},
// {lat: -7.228801, lng:  110.395588},
// {lat: -7.228669, lng:  110.395003},
// {lat: -7.228629, lng:  110.394552},
// {lat: -7.228255, lng:  110.393576},

//             ];

//             let polygon4=[
//               {lat: -7.229232, lng:  110.391748},
// {lat: -7.229140, lng:  110.390325},
// {lat: -7.229111, lng:  110.389143},
// {lat: -7.229208, lng:  110.388596},
// {lat: -7.229955, lng:  110.387460},
// {lat: -7.231144, lng:  110.386836},
// {lat: -7.230805, lng:  110.387701},
// {lat: -7.230963, lng:  110.387997},
// {lat: -7.231229, lng:  110.388186},
// {lat: -7.231656, lng:  110.388231},
// {lat: -7.232048, lng:  110.388124},
// {lat: -7.232253, lng:  110.388377},
// {lat: -7.232218, lng:  110.388621},
// {lat: -7.232343, lng:  110.388884},
// {lat: -7.232612, lng:  110.389085},
// {lat: -7.232855, lng:  110.389069},
// {lat: -7.233118, lng:  110.390128},
// {lat: -7.233517, lng:  110.390332},
// {lat: -7.234380, lng:  110.390288},
// {lat: -7.234664, lng:  110.390180},
// {lat: -7.234664, lng:  110.390180},
// {lat: -7.234664, lng:  110.390180},
// {lat: -7.234664, lng:  110.390180},
// {lat: -7.234599, lng:  110.391110},
// {lat: -7.235128, lng:  110.391866},
// {lat: -7.236084, lng:  110.391843},
// {lat: -7.236378, lng:  110.392140},
// {lat: -7.236354, lng:  110.392779},
// {lat: -7.235887, lng:  110.393410},
// {lat: -7.233369, lng:  110.394428},
// {lat: -7.230382, lng:  110.392891},
// {lat: -7.229276, lng:  110.391815},
//             ];

//             let polygon5=[
// {lat: -7.223053, lng:  110.402709},
// {lat: -7.223221, lng:  110.401752},
// {lat: -7.224005, lng:  110.401212},
// {lat: -7.225573, lng:  110.401033},
// {lat: -7.226090, lng:  110.400546},
// {lat: -7.226715, lng:  110.399408},
// {lat: -7.227271, lng:  110.398938},
// {lat: -7.228651, lng:  110.399064},
// {lat: -7.229405, lng:  110.399678},
// {lat: -7.230792, lng:  110.400330},
// {lat: -7.231658, lng:  110.400420},
// {lat: -7.232595, lng:  110.400166},
// {lat: -7.232977, lng:  110.400529},
// {lat: -7.232924, lng:  110.400856},
// {lat: -7.232985, lng:  110.401221},
// {lat: -7.233426, lng:  110.401617},
// {lat: -7.234491, lng:  110.401832},
// {lat: -7.234844, lng:  110.402062},
// {lat: -7.235648, lng:  110.402356},
// {lat: -7.235834, lng:  110.402725},
// {lat: -7.233633, lng:  110.403920},
// {lat: -7.230912, lng:  110.404967},
// {lat: -7.228211, lng:  110.408466},
// {lat: -7.227523, lng:  110.408633},
// {lat: -7.225765, lng:  110.409555},
// {lat: -7.225208, lng:  110.409640},
// {lat: -7.224769, lng:  110.409935},
// {lat: -7.224114, lng:  110.410055},
// {lat: -7.224044, lng:  110.409406},
// {lat: -7.223509, lng:  110.408590},
// {lat: -7.223558, lng:  110.407821},
// {lat: -7.223874, lng:  110.407306},
// {lat: -7.224012, lng:  110.406660},
// {lat: -7.224024, lng:  110.405637},
// {lat: -7.223703, lng:  110.404264},
// {lat: -7.223176, lng:  110.403104},
// {lat: -7.223029, lng:  110.402384},
// {lat: -7.223222, lng:  110.401808},
//             ];

//             let polygon6=[
//             {lat: -7.224864, lng:  110.392136},
// {lat: -7.225569, lng:  110.392263},
// {lat: -7.226008, lng:  110.392435},
// {lat: -7.226416, lng:  110.392511},
// {lat: -7.226896, lng:  110.392648},
// {lat: -7.227355, lng:  110.392889},
// {lat: -7.227761, lng:  110.393168},
// {lat: -7.227909, lng:  110.393275},
// {lat: -7.228250, lng:  110.393571},
// {lat: -7.228265, lng:  110.393563},
// {lat: -7.228406, lng:  110.393944},
// {lat: -7.228626, lng:  110.394524},
// {lat: -7.228666, lng:  110.395008},
// {lat: -7.228797, lng:  110.395602},
// {lat: -7.228965, lng:  110.396154},
// {lat: -7.229099, lng:  110.397264},
// {lat: -7.229094, lng:  110.397959},
// {lat: -7.229105, lng:  110.398827},
// {lat: -7.229093, lng:  110.399388},
// {lat: -7.228630, lng:  110.399062},
// {lat: -7.228246, lng:  110.398997},
// {lat: -7.227691, lng:  110.398926},
// {lat: -7.227394, lng:  110.398947},
// {lat: -7.227229, lng:  110.398434},
// {lat: -7.226985, lng:  110.397500},
// {lat: -7.226512, lng:  110.396214},
// {lat: -7.226262, lng:  110.395712},
// {lat: -7.225786, lng:  110.394907},
// {lat: -7.225961, lng:  110.394671},
// {lat: -7.225669, lng:  110.393856},
// {lat: -7.225441, lng:  110.393343},
// {lat: -7.225160, lng:  110.392730},
// {lat: -7.224850, lng:  110.392140},
//             ];

//             let polygon7=[
// {lat: -7.217142, lng:  110.389265},
// {lat: -7.218226, lng:  110.389337},
// {lat: -7.218481, lng:  110.389220},
// {lat: -7.218671, lng:  110.388909},
// {lat: -7.219617, lng:  110.388534},
// {lat: -7.220600, lng:  110.387787},
// {lat: -7.222513, lng:  110.387509},
// {lat: -7.223350, lng:  110.388823},
// {lat: -7.223583, lng:  110.389425},
// {lat: -7.224022, lng:  110.390270},
// {lat: -7.224238, lng:  110.390925},
// {lat: -7.224794, lng:  110.392025},
// {lat: -7.225129, lng:  110.392634},
// {lat: -7.225450, lng:  110.393394},
// {lat: -7.225721, lng:  110.394032},
// {lat: -7.225931, lng:  110.394608},
// {lat: -7.225639, lng:  110.395048},
// {lat: -7.225107, lng:  110.395122},
// {lat: -7.224442, lng:  110.395137},
// {lat: -7.223091, lng:  110.395309},
// {lat: -7.222177, lng:  110.395452},
// {lat: -7.221095, lng:  110.395890},
// {lat: -7.219745, lng:  110.396858},
// {lat: -7.219298, lng:  110.397317},
// {lat: -7.219410, lng:  110.396799},
// {lat: -7.219240, lng:  110.396379},
// {lat: -7.218837, lng:  110.396091},
// {lat: -7.218492, lng:  110.395965},
// {lat: -7.218303, lng:  110.395774},
// {lat: -7.218294, lng:  110.395661},
// {lat: -7.218403, lng:  110.395496},
// {lat: -7.218661, lng:  110.395339},
// {lat: -7.219001, lng:  110.395107},
// {lat: -7.219015, lng:  110.394747},
// {lat: -7.218710, lng:  110.394567},
// {lat: -7.218260, lng:  110.394489},
// {lat: -7.218067, lng:  110.394220},
// {lat: -7.218570, lng:  110.394111},
// {lat: -7.218624, lng:  110.393980},
// {lat: -7.218379, lng:  110.393498},
// {lat: -7.218372, lng:  110.393098},
// {lat: -7.218375, lng:  110.392799},
// {lat: -7.218248, lng:  110.392488},
// {lat: -7.217735, lng:  110.392252},
// {lat: -7.217609, lng:  110.391966},
// {lat: -7.217623, lng:  110.391713},
// {lat: -7.217826, lng:  110.390826},
// {lat: -7.217486, lng:  110.390444},
// {lat: -7.217722, lng:  110.389856},
// {lat: -7.217745, lng:  110.389759},
// {lat: -7.217161, lng:  110.389337},
//             ];
//             let ampelGadingPolygon = new google.maps.Polygon({
//               paths: polygon1,
//               strokeColor: '#f26588',
//               strokeOpacity: 0.8,
//               strokeWeight: 3,
//               fillColor: '#f26588',
//               fillOpacity: 0.35
//             });
//             ampelGadingPolygon.addListener('click',(event)=>{

//               contentString = "<b>Dusun Ampel Gading</b>";
//               infowindow =  new google.maps.InfoWindow({
//                 content:contentString,
//                 position:event.latLng
//               });
//               // this.infowindow.setContent(this.contentString);
//               // this.infowindow.setPosition(event.latLng);
//               infowindow.open(this.current.Map);
//               infowindow = new google.maps.InfoWindow;
//             });
//               let karangloPolygon = new google.maps.Polygon({
//               paths: polygon2,
//               strokeColor: '#028daf',
//               strokeOpacity: 0.8,
//               strokeWeight: 3,
//               fillColor: '#028daf',
//               fillOpacity: 0.35
//             });
//             karangloPolygon.addListener('click',(event)=>{
//                contentString = "<b>Dusun Ampel Gading</b>";
//               infowindow =  new google.maps.InfoWindow({
//                 content:contentString,
//                 position:event.latLng
//               });
//               //this.infowindow = new google.maps.InfoWindow;
//             });
//                 let kentengPolygon = new google.maps.Polygon({
//               paths: polygon3,
//               strokeColor: '#ffc315',
//               strokeOpacity: 0.8,
//               strokeWeight: 3,
//               fillColor: '#ffc315',
//               fillOpacity: 0.35
//             });
//             let gelaranPolygon = new google.maps.Polygon({
//               paths: polygon4,
//               strokeColor: '#97faf4',
//               strokeOpacity: 0.8,
//               strokeWeight: 3,
//               fillColor: '#97faf4',
//               fillOpacity: 0.35
//             });
//             let jurangPolygon = new google.maps.Polygon({
//               paths: polygon5,
//               strokeColor: '#af1d8a',
//               strokeOpacity: 0.8,
//               strokeWeight: 3,
//               fillColor: '#af1d8a',
//               fillOpacity: 0.35
//             });
//            let clowokPolygon = new google.maps.Polygon({
//               paths: polygon6,
//               strokeColor: '#61ad02',
//               strokeOpacity: 0.8,
//               strokeWeight: 3,
//               fillColor: '#61ad02',
//               fillOpacity: 0.35
//             });
//             let golakPolygon = new google.maps.Polygon({
//               paths: polygon7,
//               strokeColor: '#eb1c24',
//               strokeOpacity: 0.8,
//               strokeWeight: 3,
//               fillColor: '#eb1c24',
//               fillOpacity: 0.35
//             });
//             ampelGadingPolygon.setMap(this.current.Map);
//             karangloPolygon.setMap(this.current.Map);
//             kentengPolygon.setMap(this.current.Map);
//             gelaranPolygon.setMap(this.current.Map);
//             jurangPolygon.setMap(this.current.Map);
//             clowokPolygon.setMap(this.current.Map);
//             golakPolygon.setMap(this.current.Map);


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
                draggable: true,
                //animation: google.maps.Animation.BOUNCE,
                map: this.current.Map,
                icon:'img/'+folder+'/'+data.dusun.name+'.png',
            });
          marker.addListener('click', function() {
            console.log(marker.getPosition().lat().toFixed(8)+"\n"+marker.getPosition().lng().toFixed(8))  
          });
          return marker;
        },
        addMarker:function(location, map) {
            // var contentString = "<div style='float:left'><img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQo__msLhE89yumL5XTsa3REU0vrKgsN1myKOalFUY9Z7ZYbV_e'></div><div style='float:right; padding: 10px;'><b>Title</b><br/>Here’s the fastest way to check the status of your shipment. No need to call Customer Service – our online results give you real-time, detailed progress as your shipment speeds through the DHL network.<br/> City,Country</div>";

              //if(this.current.Dusun.

             // var infowindow = new google.maps.InfoWindow({
             //    content: contentString
             //  });
              
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
              console.log(marker.getPosition());
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
