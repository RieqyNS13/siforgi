<?php

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dusuns = App\Dusun::get();
        $jenises = App\Jenis::get();
        $datas = [
            ['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Karanglo";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="Perangkat Desa";
        })]->id, 'name'=>'Kepala Dusun','Latitude'=>'-7.226281381985734', 'Longitude'=>'110.39442731710324'],

            ['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Jurang";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="Perangkat Desa";
        })]->id, 'name'=>'Kepala Dusun','Latitude'=>'-7.229910128589134', 'Longitude'=>'110.39268148907206'],

             ['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Kenteng";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="Perangkat Desa";
        })]->id, 'name'=>'Kepala Dusun','Latitude'=>'-7.235541871079118', 'Longitude'=>'110.39619933352299'],

              ['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Gelaran";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="Perangkat Desa";
        })]->id, 'name'=>'Kepala Dusun','Latitude'=>'-7.235667656688348', 'Longitude'=>'110.38378132755201'],

              ['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Clowok";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="Perangkat Desa";
        })]->id,  'name'=>'Kepala Dusun','Latitude'=>'-7.229215450806829', 'Longitude'=>'110.39043719878543'],

              ['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Ampelgading";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="Perangkat Desa";
        })]->id, 'name'=>'Kepala Dusun','Latitude'=>'-7.223111125537149', 'Longitude'=>'110.38205398711557'],

            ['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Golak";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="Perangkat Desa";
        })]->id, 'name'=>'Kepala Dusun','Latitude'=>'-7.225772040885033', 'Longitude'=>'110.38378669413919'],

        ];
        foreach($datas as $key=>$value){
        	App\Location::create($value);
        }
    }
}
