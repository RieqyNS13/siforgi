<?php

use Illuminate\Database\Seeder;

class RukunTetanggaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$get=App\Dusun::get();
    	$dusuns = ["Karanglo"=>[1,2,3,4,5,6,7],"Jurang"=>[1,2,3,4],"Kenteng"=>[1,2,3,4],"Gelaran"=>[1,2,3,4],"Clowok"=>[1,2],"Ampelgading"=>[1,2,3,4,5,6],"Golak"=>[1,2,3]];
    	foreach($dusuns as $k=>$v){
    		$dusun_id = $get[$get->search(function($item, $key)use($k){
    			return $item->name==$k;
    		})];
    		$data[] = ['dusun_id'=>$dusun_id->id,'no_rt'=>$v];

    	}
    	foreach($data as $k=>$v){
    		foreach($v["no_rt"] as $v2)
    			DB::table('rukun_tetanggas')->insert(['dusun_id'=>$v['dusun_id'],'rt_no'=>$v2]);
    	}
        
      //   $dusun=App\Dusun::get();
      //   $data = [
      //   	['dusun_id'=>$dusun[$dusun->search(function($item, $key){
      //   		$item->name=
      //   	})] ]

   		 // ];
    }
}
