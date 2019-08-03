<?php

use Illuminate\Database\Seeder;

class DusunsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kadus = \App\Kadus::get();
        $data = [
    		['name'=>'Ampelgading', 'kadus_id'=> $kadus[$kadus->search(function($item, $key){
                return $item->name=="Sukeri";

            })]->id, 'Latitude'=> -7.2268274,'Longitude'=>110.3874583],
    		['name'=>'Karanglo', 'kadus_id'=>$kadus[$kadus->search(function($item, $key){
                return $item->name=="Mudriyanyo";

            })]->id, 'Latitude'=> -7.2232268,'Longitude'=>110.3991875],
    		['name'=>'Clowok', 'kadus_id'=>$kadus[$kadus->search(function($item, $key){
                return $item->name=="Bambang";

            })]->id, 'Latitude'=> -7.2269803,'Longitude'=>110.3946826],
    		['name'=>'Gelaran', 'kadus_id'=>$kadus[$kadus->search(function($item, $key){
                return $item->name=="Tauhid";

            })]->id, 'Latitude'=> -7.232762,'Longitude'=>110.3884532],
    		['name'=>'Kenteng', 'kadus_id'=>$kadus[$kadus->search(function($item, $key){
                return $item->name=="Sugeng";

            })]->id, 'Latitude'=> -7.2308289,'Longitude'=>110.3939133],
    		['name'=>'Jurang', 'kadus_id'=>$kadus[$kadus->search(function($item, $key){
                return $item->name=="Pramono";

            })]->id, 'Latitude'=> -7.2294631,'Longitude'=>110.4001442],
    		['name'=>'Golak', 'kadus_id'=>$kadus[$kadus->search(function($item, $key){
                return $item->name=="Rokhamin";

            })]->id, 'Latitude'=> -7.2215465,'Longitude'=>110.3902476]

    	];
    	foreach($data as $dusun){
    		DB::table('dusuns')->insert($dusun);
    	}
    }
}
