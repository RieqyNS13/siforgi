<?php

use Illuminate\Database\Seeder;

class BasedGendersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dusuns = [
        	["name"=>"Karanglo", "data"=>[
        		["rt"=>1, "penduduk"=>['L'=>45, 'P'=>57]],
        		["rt"=>2, "penduduk"=>['L'=>72, 'P'=>70]],
        		["rt"=>3, "penduduk"=>['L'=>95, 'P'=>101]],
        		["rt"=>4, "penduduk"=>['L'=>124, 'P'=>114]],
        		["rt"=>5, "penduduk"=>['L'=>169, 'P'=>162]],
        		["rt"=>6, "penduduk"=>['L'=>107, 'P'=>113]],
        		["rt"=>7, "penduduk"=>['L'=>103, 'P'=>106]]
        	]],
        	["name"=>"Jurang", "data"=>[
        		["rt"=>1, "penduduk"=>['L'=>80, 'P'=>71]],
        		["rt"=>2, "penduduk"=>['L'=>82, 'P'=>77]],
        		["rt"=>3, "penduduk"=>['L'=>73, 'P'=>69]],
        		["rt"=>4, "penduduk"=>['L'=>92, 'P'=>107]]
        	]],
        	["name"=>"Kenteng", "data"=>[
        		["rt"=>1, "penduduk"=>['L'=>93, 'P'=>71]],
        		["rt"=>2, "penduduk"=>['L'=>60, 'P'=>52]],
        		["rt"=>3, "penduduk"=>['L'=>77, 'P'=>82]],
        		["rt"=>4, "penduduk"=>['L'=>68, 'P'=>59]]
        	]],
        	["name"=>"Gelaran", "data"=>[
        		["rt"=>1, "penduduk"=>['L'=>143, 'P'=>141]],
        		["rt"=>2, "penduduk"=>['L'=>120, 'P'=>108]],
        		["rt"=>3, "penduduk"=>['L'=>66, 'P'=>67]],
        		["rt"=>4, "penduduk"=>['L'=>60, 'P'=>59]]
        	]],
        	["name"=>"Clowok", "data"=>[
        		["rt"=>1, "penduduk"=>['L'=>79, 'P'=>68]],
        		["rt"=>2, "penduduk"=>['L'=>83, 'P'=>86]]
        	]],
        	["name"=>"Ampelgading", "data"=>[
        		["rt"=>1, "penduduk"=>['L'=>126, 'P'=>115]],
        		["rt"=>2, "penduduk"=>['L'=>84, 'P'=>106]],
        		["rt"=>3, "penduduk"=>['L'=>82, 'P'=>76]],
        		["rt"=>4, "penduduk"=>['L'=>91, 'P'=>98]],
        		["rt"=>5, "penduduk"=>['L'=>83, 'P'=>86]],
        		["rt"=>6, "penduduk"=>['L'=>0, 'P'=>2]],
        	]],
        	["name"=>"Golak", "data"=>[
        		["rt"=>1, "penduduk"=>['L'=>126, 'P'=>115]],
        		["rt"=>2, "penduduk"=>['L'=>84, 'P'=>106]],
        		["rt"=>3, "penduduk"=>['L'=>82, 'P'=>76]],
        		["rt"=>4, "penduduk"=>['L'=>91, 'P'=>98]],
        		["rt"=>5, "penduduk"=>['L'=>83, 'P'=>86]],
        		["rt"=>6, "penduduk"=>['L'=>0, 'P'=>2]],
        	]]


        ];

       $get=App\Dusun::with('rukun_tetanggas')->get();

       foreach ($dusuns as $key => $value) {
       		$dusun_index = $get->search(function($item,$key)use($value){
       			return $item->name==$value['name'];
       		});
       		//echo $get[$index]->name."\n";

       		foreach($value['data'] as $key2 => $value2){
       			$rt_index = $get[$dusun_index]->rukun_tetanggas->search(function($item, $key)use($value2){
       				return $item->rt_no==$value2['rt'];
       			});	
       			$data = ['rukun_tetangga_id'=>$get[$dusun_index]->rukun_tetanggas[$rt_index]->id, 'gender'=>'L','jumlah'=>$value2['penduduk']['L']];
       			$data2 = ['rukun_tetangga_id'=>$get[$dusun_index]->rukun_tetanggas[$rt_index]->id, 'gender'=>'P','jumlah'=>$value2['penduduk']['P']];
       			App\BasedGender::create($data);
       			App\BasedGender::create($data2);
       		}	
       		//$data = ['dusun_id'=>$get[$index]->id,'rukun_tetangga_id'=>]
       }
    }

}
