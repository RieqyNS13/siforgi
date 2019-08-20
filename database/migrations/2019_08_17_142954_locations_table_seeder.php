<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Location;
use App\Dusun;
class LocationsTableSeeder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $dusuns = Dusun::get();
        $datas = [
            ['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Karanglo";
        })]->id, 'name'=>'Kepala Dusun','Latitude'=>'-7.226281381985734', 'Longitude'=>'110.39442731710324'],
            ['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Jurang";
        })]->id, 'name'=>'Kepala Dusun','Latitude'=>'-7.229910128589134', 'Longitude'=>'110.39268148907206'],
             ['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Kenteng";
        })]->id, 'name'=>'Kepala Dusun','Latitude'=>'-7.235541871079118', 'Longitude'=>'110.39619933352299'],
              ['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Gelaran";
        })]->id, 'name'=>'Kepala Dusun','Latitude'=>'-7.235667656688348', 'Longitude'=>'110.38378132755201'],
              ['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Clowok";
        })]->id, 'name'=>'Kepala Dusun','Latitude'=>'-7.229215450806829', 'Longitude'=>'110.39043719878543'],
              ['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Ampelgading";
        })]->id, 'name'=>'Kepala Dusun','Latitude'=>'-7.223111125537149', 'Longitude'=>'110.38205398711557'],
            ['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Golak";
        })]->id, 'name'=>'Kepala Dusun','Latitude'=>'7.225772040885033', 'Longitude'=>'110.38378669413919'],
        ]
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
