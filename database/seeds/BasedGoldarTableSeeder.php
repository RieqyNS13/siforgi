<?php

use Illuminate\Database\Seeder;

class BasedGoldarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//$goldar=['A','B','AB','O','A+','A-','B+','B-','AB+','AB-','O+','O-','-'];
        $dusuns = [
        	["name"=>"Karanglo", "data"=>[
        		["rt"=>1, "penduduk"=>[
        			['goldar'=>"A","data"=>['L'=>3, 'P'=>0]],
        			['goldar'=>"B","data"=>['L'=>1, 'P'=>1]],
        			['goldar'=>"AB","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O","data"=>['L'=>1, 'P'=>0]],
        			['goldar'=>"A+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"A-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"-","data"=>['L'=>41, 'P'=>55]]
        		]],
        		["rt"=>2, "penduduk"=>[
        			['goldar'=>"A","data"=>['L'=>1, 'P'=>0]],
        			['goldar'=>"B","data"=>['L'=>2, 'P'=>2]],
        			['goldar'=>"AB","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O","data"=>['L'=>1, 'P'=>2]],
        			['goldar'=>"A+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"A-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"-","data"=>['L'=>68, 'P'=>66]]
        		]],
        		["rt"=>3, "penduduk"=>[
        			['goldar'=>"A","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B","data"=>['L'=>1, 'P'=>1]],
        			['goldar'=>"AB","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O","data"=>['L'=>3, 'P'=>2]],
        			['goldar'=>"A+","data"=>['L'=>0, 'P'=>1]],
        			['goldar'=>"A-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O-","data"=>['L'=>0, 'P'=>1]],
        			['goldar'=>"-","data"=>['L'=>91, 'P'=>96]]
        		]],
        		["rt"=>4, "penduduk"=>[
        			['goldar'=>"A","data"=>['L'=>1, 'P'=>4]],
        			['goldar'=>"B","data"=>['L'=>2, 'P'=>2]],
        			['goldar'=>"AB","data"=>['L'=>1, 'P'=>1]],
        			['goldar'=>"O","data"=>['L'=>0, 'P'=>1]],
        			['goldar'=>"A+","data"=>['L'=>0, 'P'=>1]],
        			['goldar'=>"A-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"-","data"=>['L'=>118, 'P'=>111]]
        		]],
        		["rt"=>5, "penduduk"=>[
        			['goldar'=>"A","data"=>['L'=>4, 'P'=>1]],
        			['goldar'=>"B","data"=>['L'=>4, 'P'=>4]],
        			['goldar'=>"AB","data"=>['L'=>1, 'P'=>2]],
        			['goldar'=>"O","data"=>['L'=>6, 'P'=>7]],
        			['goldar'=>"A+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"A-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O-","data"=>['L'=>0, 'P'=>1]],
        			['goldar'=>"-","data"=>['L'=>154, 'P'=>147]]
        		]],
        		["rt"=>6, "penduduk"=>[
        			['goldar'=>"A","data"=>['L'=>3, 'P'=>0]],
        			['goldar'=>"B","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O","data"=>['L'=>1, 'P'=>0]],
        			['goldar'=>"A+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"A-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O-","data"=>['L'=>0, 'P'=>1]],
        			['goldar'=>"-","data"=>['L'=>103, 'P'=>113]]
        		]],
        		["rt"=>7, "penduduk"=>[
        			['goldar'=>"A","data"=>['L'=>1, 'P'=>0]],
        			['goldar'=>"B","data"=>['L'=>1, 'P'=>0]],
        			['goldar'=>"AB","data"=>['L'=>0, 'P'=>1]],
        			['goldar'=>"O","data"=>['L'=>3, 'P'=>2]],
        			['goldar'=>"A+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"A-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O-","data"=>['L'=>1, 'P'=>0]],
        			['goldar'=>"-","data"=>['L'=>98, 'P'=>102]]
        		]]
        	
        	]],
        	["name"=>"Jurang", "data"=>[
        		["rt"=>1, "penduduk"=>[
        			['goldar'=>"A","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B","data"=>['L'=>1, 'P'=>0]],
        			['goldar'=>"AB","data"=>['L'=>1, 'P'=>0]],
        			['goldar'=>"O","data"=>['L'=>0, 'P'=>1]],
        			['goldar'=>"A+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"A-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"-","data"=>['L'=>79, 'P'=>69]]
        		]],
        		["rt"=>2, "penduduk"=>[
        			['goldar'=>"A","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B","data"=>['L'=>1, 'P'=>0]],
        			['goldar'=>"AB","data"=>['L'=>0, 'P'=>1]],
        			['goldar'=>"O","data"=>['L'=>2, 'P'=>0]],
        			['goldar'=>"A+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"A-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"-","data"=>['L'=>80, 'P'=>75]]
        		]],
        		["rt"=>3, "penduduk"=>[
        			['goldar'=>"A","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B","data"=>['L'=>1, 'P'=>0]],
        			['goldar'=>"AB","data"=>['L'=>0, 'P'=>1]],
        			['goldar'=>"O","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"A+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"A-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"-","data"=>['L'=>73, 'P'=>68]]
        		]],
        		["rt"=>4, "penduduk"=>[
        			['goldar'=>"A","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B","data"=>['L'=>1, 'P'=>1]],
        			['goldar'=>"AB","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"A+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"A-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"-","data"=>['L'=>91, 'P'=>107]]
        		]]
        	
        	]],
        	["name"=>"Kenteng", "data"=>[
        		["rt"=>1, "penduduk"=>[
        			['goldar'=>"A","data"=>['L'=>1, 'P'=>0]],
        			['goldar'=>"B","data"=>['L'=>1, 'P'=>1]],
        			['goldar'=>"AB","data"=>['L'=>0, 'P'=>1]],
        			['goldar'=>"O","data"=>['L'=>3, 'P'=>0]],
        			['goldar'=>"A+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"A-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"-","data"=>['L'=>88, 'P'=>69]]
        		]],
        		["rt"=>2, "penduduk"=>[
        			['goldar'=>"A","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"A+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"A-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"-","data"=>['L'=>60, 'P'=>52]]
        		]],
        		["rt"=>3, "penduduk"=>[
        			['goldar'=>"A","data"=>['L'=>1, 'P'=>0]],
        			['goldar'=>"B","data"=>['L'=>1, 'P'=>1]],
        			['goldar'=>"AB","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O","data"=>['L'=>0, 'P'=>1]],
        			['goldar'=>"A+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"A-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"-","data"=>['L'=>75, 'P'=>80]]
        		]],
        		["rt"=>4, "penduduk"=>[
        			['goldar'=>"A","data"=>['L'=>1, 'P'=>1]],
        			['goldar'=>"B","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O","data"=>['L'=>2, 'P'=>0]],
        			['goldar'=>"A+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"A-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"-","data"=>['L'=>65, 'P'=>58]]
        		]]
        	
        	]],

        	["name"=>"Gelaran", "data"=>[
        		["rt"=>1, "penduduk"=>[
        			['goldar'=>"A","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B","data"=>['L'=>3, 'P'=>3]],
        			['goldar'=>"AB","data"=>['L'=>1, 'P'=>1]],
        			['goldar'=>"O","data"=>['L'=>2, 'P'=>3]],
        			['goldar'=>"A+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"A-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"-","data"=>['L'=>137, 'P'=>136]]
        		]],
        		["rt"=>2, "penduduk"=>[
        			['goldar'=>"A","data"=>['L'=>3, 'P'=>2]],
        			['goldar'=>"B","data"=>['L'=>1, 'P'=>1]],
        			['goldar'=>"AB","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O","data"=>['L'=>2, 'P'=>1]],
        			['goldar'=>"A+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"A-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"-","data"=>['L'=>114, 'P'=>104]]
        		]],
        		["rt"=>3, "penduduk"=>[
        			['goldar'=>"A","data"=>['L'=>1, 'P'=>1]],
        			['goldar'=>"B","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O","data"=>['L'=>2, 'P'=>3]],
        			['goldar'=>"A+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"A-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O-","data"=>['L'=>1, 'P'=>1]],
        			['goldar'=>"-","data"=>['L'=>63, 'P'=>62]]
        		]],
        		["rt"=>4, "penduduk"=>[
        			['goldar'=>"A","data"=>['L'=>2, 'P'=>0]],
        			['goldar'=>"B","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O","data"=>['L'=>2, 'P'=>1]],
        			['goldar'=>"A+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"A-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"-","data"=>['L'=>56, 'P'=>58]]
        		]]
        	
        	]],

        	["name"=>"Clowok", "data"=>[
        		["rt"=>1, "penduduk"=>[
        			['goldar'=>"A","data"=>['L'=>1, 'P'=>3]],
        			['goldar'=>"B","data"=>['L'=>3, 'P'=>3]],
        			['goldar'=>"AB","data"=>['L'=>0, 'P'=>1]],
        			['goldar'=>"O","data"=>['L'=>5, 'P'=>1]],
        			['goldar'=>"A+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"A-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"-","data"=>['L'=>70, 'P'=>60]]
        		]],
        		["rt"=>2, "penduduk"=>[
        			['goldar'=>"A","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB","data"=>['L'=>0, 'P'=>1]],
        			['goldar'=>"O","data"=>['L'=>1, 'P'=>1]],
        			['goldar'=>"A+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"A-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"-","data"=>['L'=>81, 'P'=>85]]
        		]],
        	
        	]],

        	["name"=>"Ampelgading", "data"=>[
        		["rt"=>1, "penduduk"=>[
        			['goldar'=>"A","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B","data"=>['L'=>1, 'P'=>1]],
        			['goldar'=>"AB","data"=>['L'=>0, 'P'=>1]],
        			['goldar'=>"O","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"A+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"A-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"-","data"=>['L'=>125, 'P'=>113]]
        		]],
        		["rt"=>2, "penduduk"=>[
        			['goldar'=>"A","data"=>['L'=>1, 'P'=>0]],
        			['goldar'=>"B","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O","data"=>['L'=>0, 'P'=>1]],
        			['goldar'=>"A+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"A-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"-","data"=>['L'=>83, 'P'=>102]]
        		]],
        		["rt"=>3, "penduduk"=>[
        			['goldar'=>"A","data"=>['L'=>0, 'P'=>1]],
        			['goldar'=>"B","data"=>['L'=>2, 'P'=>2]],
        			['goldar'=>"AB","data"=>['L'=>1, 'P'=>0]],
        			['goldar'=>"O","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"A+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"A-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"-","data"=>['L'=>79, 'P'=>75]]
        		]],
        		["rt"=>4, "penduduk"=>[
        			['goldar'=>"A","data"=>['L'=>2, 'P'=>0]],
        			['goldar'=>"B","data"=>['L'=>2, 'P'=>2]],
        			['goldar'=>"AB","data"=>['L'=>1, 'P'=>0]],
        			['goldar'=>"O","data"=>['L'=>1, 'P'=>2]],
        			['goldar'=>"A+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"A-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"-","data"=>['L'=>85, 'P'=>95]]
        		]],
        		["rt"=>5, "penduduk"=>[
        			['goldar'=>"A","data"=>['L'=>1, 'P'=>3]],
        			['goldar'=>"B","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O","data"=>['L'=>2, 'P'=>0]],
        			['goldar'=>"A+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"A-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"-","data"=>['L'=>80, 'P'=>83]]
        		]]

        	]],

        	["name"=>"Golak", "data"=>[
        		["rt"=>1, "penduduk"=>[
        			['goldar'=>"A","data"=>['L'=>1, 'P'=>2]],
        			['goldar'=>"B","data"=>['L'=>2, 'P'=>2]],
        			['goldar'=>"AB","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O","data"=>['L'=>1, 'P'=>1]],
        			['goldar'=>"A+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"A-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O-","data"=>['L'=>1, 'P'=>0]],
        			['goldar'=>"-","data"=>['L'=>82, 'P'=>87]]
        		]],
        		["rt"=>2, "penduduk"=>[
        			['goldar'=>"A","data"=>['L'=>3, 'P'=>5]],
        			['goldar'=>"B","data"=>['L'=>3, 'P'=>3]],
        			['goldar'=>"AB","data"=>['L'=>2, 'P'=>1]],
        			['goldar'=>"O","data"=>['L'=>3, 'P'=>3]],
        			['goldar'=>"A+","data"=>['L'=>1, 'P'=>0]],
        			['goldar'=>"A-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"-","data"=>['L'=>95, 'P'=>96]]
        		]],
        		["rt"=>3, "penduduk"=>[
        			['goldar'=>"A","data"=>['L'=>1, 'P'=>1]],
        			['goldar'=>"B","data"=>['L'=>4, 'P'=>1]],
        			['goldar'=>"AB","data"=>['L'=>0, 'P'=>1]],
        			['goldar'=>"O","data"=>['L'=>2, 'P'=>2]],
        			['goldar'=>"A+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"A-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"B-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"AB-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O+","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"O-","data"=>['L'=>0, 'P'=>0]],
        			['goldar'=>"-","data"=>['L'=>74, 'P'=>78]]
        		]],
        	
        	]],



        ];
        $getDusun = App\Dusun::with('rukun_tetanggas')->get();
        $getGoldar = App\Goldar::get();
        foreach($dusuns as $key=>$value){
        	$dusun_index = $getDusun->search(function($item, $key)use($value){
        		return $item->name==$value['name'];
        	});
        	foreach($value['data'] as $key2=>$value2){
        		$rt_index = $getDusun[$dusun_index]->rukun_tetanggas->search(function($item, $key)use($value2){
        			return $item->rt_no==$value2["rt"];
        		});
        		foreach($value2['penduduk'] as $key3=>$value3){
        			$goldar_index = $getGoldar->search(function($item, $key)use($value3){
        				return $item->name==$value3['goldar'];
        			});
        			$data = ['rukun_tetangga_id'=>$getDusun[$dusun_index]->rukun_tetanggas[$rt_index]->id, 'goldar_id'=>$getGoldar[$goldar_index]->id,'gender'=>'L','jumlah'=>$value3['data']['L']];
        			$data2 = ['rukun_tetangga_id'=>$getDusun[$dusun_index]->rukun_tetanggas[$rt_index]->id, 'goldar_id'=>$getGoldar[$goldar_index]->id,'gender'=>'P','jumlah'=>$value3['data']['P']];
        			App\BasedGoldar::create($data);
        			App\BasedGoldar::create($data2);
        		}
        	}
        
        }
    }
}
