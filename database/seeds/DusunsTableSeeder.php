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
    		['name'=>'Karanglo','rw_no'=>1, 'kadus_id'=>$kadus[$kadus->search(function($item, $key){
                return $item->name=="Mudriyanyo";

            })]->id, 'Latitude'=> -7.2232268,'Longitude'=>110.3991875],
            ['name'=>'Jurang', 'rw_no'=>2, 'kadus_id'=>$kadus[$kadus->search(function($item, $key){
                return $item->name=="Pramono";

            })]->id, 'Latitude'=> -7.2294631,'Longitude'=>110.4001442],
            ['name'=>'Kenteng', 'rw_no'=>3, 'kadus_id'=>$kadus[$kadus->search(function($item, $key){
                return $item->name=="Sugeng";

            })]->id, 'Latitude'=> -7.2308289,'Longitude'=>110.3939133],
            ['name'=>'Gelaran','rw_no'=>4, 'kadus_id'=>$kadus[$kadus->search(function($item, $key){
                return $item->name=="Tauhid";

            })]->id, 'Latitude'=> -7.232762,'Longitude'=>110.3884532],
    		['name'=>'Clowok', 'rw_no'=>5, 'kadus_id'=>$kadus[$kadus->search(function($item, $key){
                return $item->name=="Bambang";

            })]->id, 'Latitude'=> -7.2269803,'Longitude'=>110.3946826],
            ['name'=>'Ampelgading', 'rw_no'=>6, 'kadus_id'=> $kadus[$kadus->search(function($item, $key){
                return $item->name=="Sukeri";

            })]->id, 'Latitude'=> -7.2268274,'Longitude'=>110.3874583],
    	
    		['name'=>'Golak', 'rw_no'=>7, 'kadus_id'=>$kadus[$kadus->search(function($item, $key){
                return $item->name=="Rokhamin";

            })]->id, 'Latitude'=> -7.2215465,'Longitude'=>110.3902476]

    	];
    	foreach($data as $dusun){
    		DB::table('dusuns')->insert($dusun);
    	}
    }
}
