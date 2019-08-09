<?php

use Illuminate\Database\Seeder;

class BasedAgamasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// $agama = ["Islam","Kristen","Katholik","Budha","Hindu"];
    	// $agama_data = App\Agama::get();
    	// $agama_index = [];
    	// foreach($agama as $k=>$v){
    	// 	$agama_index[$k] = $agama_data->search(function($item, $key)use($v){
    	// 		return $item->name==$v;
    	// 	});
    	// }
    	//print_r($agama_index);
       $dusuns = [
        	["name"=>"Karanglo", "data"=>[
        		["rt"=>1, "penduduk"=>[
        			['agama'=>"Islam","data"=>['L'=>40, 'P'=>51]],
        			['agama'=>"Kristen","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Katholik","data"=>['L'=>5, 'P'=>6]],
        			['agama'=>"Hindu","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Budha","data"=>['L'=>0, 'P'=>0]]
        		]],
        		["rt"=>2, "penduduk"=>[
        			['agama'=>"Islam","data"=>['L'=>72, 'P'=>70]],
        			['agama'=>"Kristen","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Katholik","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Hindu","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Budha","data"=>['L'=>0, 'P'=>0]]
        		]],
        		["rt"=>3, "penduduk"=>[
        			['agama'=>"Islam","data"=>['L'=>94, 'P'=>100]],
        			['agama'=>"Kristen","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Katholik","data"=>['L'=>1, 'P'=>1]],
        			['agama'=>"Hindu","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Budha","data"=>['L'=>0, 'P'=>0]]
        		]],
        		["rt"=>4, "penduduk"=>[
        			['agama'=>"Islam","data"=>['L'=>114, 'P'=>103]],
        			['agama'=>"Kristen","data"=>['L'=>6, 'P'=>6]],
        			['agama'=>"Katholik","data"=>['L'=>4, 'P'=>6]],
        			['agama'=>"Hindu","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Budha","data"=>['L'=>0, 'P'=>0]]
        		]],
        		["rt"=>5, "penduduk"=>[
        			['agama'=>"Islam","data"=>['L'=>155, 'P'=>142]],
        			['agama'=>"Kristen","data"=>['L'=>7, 'P'=>7]],
        			['agama'=>"Katholik","data"=>['L'=>7, 'P'=>11]],
        			['agama'=>"Hindu","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Budha","data"=>['L'=>0, 'P'=>0]]
        		]],
        		["rt"=>6, "penduduk"=>[
        			['agama'=>"Islam","data"=>['L'=>105, 'P'=>112]],
        			['agama'=>"Kristen","data"=>['L'=>2, 'P'=>2]],
        			['agama'=>"Katholik","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Hindu","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Budha","data"=>['L'=>0, 'P'=>0]]
        		]],
        		["rt"=>7, "penduduk"=>[
        			['agama'=>"Islam","data"=>['L'=>102, 'P'=>105]],
        			['agama'=>"Kristen","data"=>['L'=>1, 'P'=>1]],
        			['agama'=>"Katholik","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Hindu","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Budha","data"=>['L'=>0, 'P'=>0]]
        		]]
        	
        	]],
        	["name"=>"Jurang", "data"=>[
        		["rt"=>1, "penduduk"=>[
        			['agama'=>"Islam","data"=>['L'=>80, 'P'=>71]],
        			['agama'=>"Kristen","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Katholik","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Hindu","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Budha","data"=>['L'=>0, 'P'=>0]]
        		]],
        		["rt"=>2, "penduduk"=>[
        			['agama'=>"Islam","data"=>['L'=>82, 'P'=>77]],
        			['agama'=>"Kristen","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Katholik","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Hindu","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Budha","data"=>['L'=>0, 'P'=>0]]
        		]],
        		["rt"=>3, "penduduk"=>[
        			['agama'=>"Islam","data"=>['L'=>73, 'P'=>69]],
        			['agama'=>"Kristen","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Katholik","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Hindu","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Budha","data"=>['L'=>0, 'P'=>0]]
        		]],
        		["rt"=>4, "penduduk"=>[
        			['agama'=>"Islam","data"=>['L'=>92, 'P'=>107]],
        			['agama'=>"Kristen","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Katholik","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Hindu","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Budha","data"=>['L'=>0, 'P'=>0]]
        		]]
        	
        	]],
        	["name"=>"Kenteng", "data"=>[
        		["rt"=>1, "penduduk"=>[
        			['agama'=>"Islam","data"=>['L'=>87, 'P'=>69]],
        			['agama'=>"Kristen","data"=>['L'=>2, 'P'=>2]],
        			['agama'=>"Katholik","data"=>['L'=>4, 'P'=>1]],
        			['agama'=>"Hindu","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Budha","data"=>['L'=>0, 'P'=>0]]
        		]],
        		["rt"=>2, "penduduk"=>[
        			['agama'=>"Islam","data"=>['L'=>60, 'P'=>52]],
        			['agama'=>"Kristen","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Katholik","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Hindu","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Budha","data"=>['L'=>0, 'P'=>0]]
        		]],
        		["rt"=>3, "penduduk"=>[
        			['agama'=>"Islam","data"=>['L'=>77, 'P'=>82]],
        			['agama'=>"Kristen","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Katholik","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Hindu","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Budha","data"=>['L'=>0, 'P'=>0]]
        		]],
        		["rt"=>4, "penduduk"=>[
        			['agama'=>"Islam","data"=>['L'=>66, 'P'=>59]],
        			['agama'=>"Kristen","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Katholik","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Hindu","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Budha","data"=>['L'=>0, 'P'=>0]]
        		]]
        	
        	]],

        	["name"=>"Gelaran", "data"=>[
        		["rt"=>1, "penduduk"=>[
        			['agama'=>"Islam","data"=>['L'=>130, 'P'=>130]],
        			['agama'=>"Kristen","data"=>['L'=>6, 'P'=>6]],
        			['agama'=>"Katholik","data"=>['L'=>7, 'P'=>6]],
        			['agama'=>"Hindu","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Budha","data"=>['L'=>0, 'P'=>0]]
        		]],
        		["rt"=>2, "penduduk"=>[
        			['agama'=>"Islam","data"=>['L'=>118, 'P'=>105]],
        			['agama'=>"Kristen","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Katholik","data"=>['L'=>2, 'P'=>2]],
        			['agama'=>"Hindu","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Budha","data"=>['L'=>0, 'P'=>0]]
        		]],
        		["rt"=>3, "penduduk"=>[
        			['agama'=>"Islam","data"=>['L'=>66, 'P'=>67]],
        			['agama'=>"Kristen","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Katholik","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Hindu","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Budha","data"=>['L'=>0, 'P'=>0]]
        		]],
        		["rt"=>4, "penduduk"=>[
        			['agama'=>"Islam","data"=>['L'=>60, 'P'=>59]],
        			['agama'=>"Kristen","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Katholik","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Hindu","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Budha","data"=>['L'=>0, 'P'=>0]]
        		]]
        	
        	]],

        	["name"=>"Clowok", "data"=>[
        		["rt"=>1, "penduduk"=>[
        			['agama'=>"Islam","data"=>['L'=>72,'P'=>58]],
        			['agama'=>"Kristen","data"=>['L'=>4, 'P'=>4]],
        			['agama'=>"Katholik","data"=>['L'=>1, 'P'=>0]],
        			['agama'=>"Hindu","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Budha","data"=>['L'=>2, 'P'=>5]]
        		]],
        		["rt"=>2, "penduduk"=>[
        			['agama'=>"Islam","data"=>['L'=>78, 'P'=>83]],
        			['agama'=>"Kristen","data"=>['L'=>5, 'P'=>5]],
        			['agama'=>"Katholik","data"=>['L'=>2, 'P'=>2]],
        			['agama'=>"Hindu","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Budha","data"=>['L'=>0, 'P'=>0]]
        		]],
        	
        	]],

        	["name"=>"Ampelgading", "data"=>[
        		["rt"=>1, "penduduk"=>[
        			['agama'=>"Islam","data"=>['L'=>116, 'P'=>101]],
        			['agama'=>"Kristen","data"=>['L'=>9, 'P'=>9]],
        			['agama'=>"Katholik","data"=>['L'=>1, 'P'=>0]],
        			['agama'=>"Hindu","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Budha","data"=>['L'=>0, 'P'=>0]]
        		]],
        		["rt"=>2, "penduduk"=>[
        			['agama'=>"Islam","data"=>['L'=>77, 'P'=>87]],
        			['agama'=>"Kristen","data"=>['L'=>7, 'P'=>7]],
        			['agama'=>"Katholik","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Hindu","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Budha","data"=>['L'=>0, 'P'=>0]]
        		]],
        		["rt"=>3, "penduduk"=>[
        			['agama'=>"Islam","data"=>['L'=>68, 'P'=>59]],
        			['agama'=>"Kristen","data"=>['L'=>11, 'P'=>11]],
        			['agama'=>"Katholik","data"=>['L'=>3, 'P'=>1]],
        			['agama'=>"Hindu","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Budha","data"=>['L'=>0, 'P'=>0]]
        		]],
        		["rt"=>4, "penduduk"=>[
        			['agama'=>"Islam","data"=>['L'=>81, 'P'=>85]],
        			['agama'=>"Kristen","data"=>['L'=>8, 'P'=>8]],
        			['agama'=>"Katholik","data"=>['L'=>2, 'P'=>3]],
        			['agama'=>"Hindu","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Budha","data"=>['L'=>0, 'P'=>0]]
        		]],
        		["rt"=>5, "penduduk"=>[
        			['agama'=>"Islam","data"=>['L'=>74, 'P'=>74]],
        			['agama'=>"Kristen","data"=>['L'=>7, 'P'=>7]],
        			['agama'=>"Katholik","data"=>['L'=>2, 'P'=>1]],
        			['agama'=>"Hindu","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Budha","data"=>['L'=>0, 'P'=>0]]
        		]],
        		["rt"=>6, "penduduk"=>[
        			['agama'=>"Islam","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Kristen","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Katholik","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Hindu","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Budha","data"=>['L'=>0, 'P'=>0]]
        		]],

        	]],

        	["name"=>"Golak", "data"=>[
        		["rt"=>1, "penduduk"=>[
        			['agama'=>"Islam","data"=>['L'=>80,'P'=>84]],
        			['agama'=>"Kristen","data"=>['L'=>2, 'P'=>2]],
        			['agama'=>"Katholik","data"=>['L'=>5, 'P'=>5]],
        			['agama'=>"Hindu","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Budha","data"=>['L'=>2, 'P'=>5]]
        		]],
        		["rt"=>2, "penduduk"=>[
        			['agama'=>"Islam","data"=>['L'=>82, 'P'=>81]],
        			['agama'=>"Kristen","data"=>['L'=>10, 'P'=>10]],
        			['agama'=>"Katholik","data"=>['L'=>15, 'P'=>18]],
        			['agama'=>"Hindu","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Budha","data"=>['L'=>0, 'P'=>0]]
        		]],
        		["rt"=>3, "penduduk"=>[
        			['agama'=>"Islam","data"=>['L'=>80, 'P'=>79]],
        			['agama'=>"Kristen","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Katholik","data"=>['L'=>1, 'P'=>4]],
        			['agama'=>"Hindu","data"=>['L'=>0, 'P'=>0]],
        			['agama'=>"Budha","data"=>['L'=>0, 'P'=>0]]
        		]],
        	
        	]],



        ];
        $getDusun = App\Dusun::with('rukun_tetanggas')->get();
        $getAgama = App\Agama::get();
        foreach($dusuns as $key=>$value){
        	$dusun_index = $getDusun->search(function($item, $key)use($value){
        		return $item->name==$value['name'];
        	});
        	foreach($value['data'] as $key2=>$value2){
        		$rt_index = $getDusun[$dusun_index]->rukun_tetanggas->search(function($item, $key)use($value2){
        			return $item->rt_no==$value2["rt"];
        		});
        		foreach($value2['penduduk'] as $key3=>$value3){
        			$agama_index = $getAgama->search(function($item, $key)use($value3){
        				return $item->name==$value3['agama'];
        			});
        			$data = ['rukun_tetangga_id'=>$getDusun[$dusun_index]->rukun_tetanggas[$rt_index]->id, 'agama_id'=>$getAgama[$agama_index]->id,'gender'=>'L','jumlah'=>$value3['data']['L']];
        			$data2 = ['rukun_tetangga_id'=>$getDusun[$dusun_index]->rukun_tetanggas[$rt_index]->id, 'agama_id'=>$getAgama[$agama_index]->id,'gender'=>'P','jumlah'=>$value3['data']['P']];
        			App\BasedAgama::create($data);
        			App\BasedAgama::create($data2);
        		}
        	}
        
        }
    }
}
