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
    	$agamas = App\Agamas::get();
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
    }
}
