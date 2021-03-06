<?php

use Illuminate\Database\Seeder;

class BasedPendidikanTableSeeder extends Seeder
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
        		["rt"=>1, "penduduk"=>[
        			['pendidikan'=>"Tidak/Belum Sekolah","data"=>['L'=>12, 'P'=>17]],
        			['pendidikan'=>"Belum Tamat SD","data"=>['L'=>5, 'P'=>5]],
        			['pendidikan'=>"Tamat SD","data"=>['L'=>9, 'P'=>9]],
        			['pendidikan'=>"SLTP","data"=>['L'=>6, 'P'=>10]],
        			['pendidikan'=>"SLTA","data"=>['L'=>8, 'P'=>11]],
        			['pendidikan'=>"Diploma I/II","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Akademi/Diplomat III/S. Muda","data"=>['L'=>3, 'P'=>2]],
        			['pendidikan'=>"Diploma IV/Strata I","data"=>['L'=>2, 'P'=>2]],
        			['pendidikan'=>"Strata II","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Strata III","data"=>['L'=>0, 'P'=>0]],
        		]],
        		["rt"=>2, "penduduk"=>[
        			['pendidikan'=>"Tidak/Belum Sekolah","data"=>['L'=>19, 'P'=>15]],
        			['pendidikan'=>"Belum Tamat SD","data"=>['L'=>13, 'P'=>13]],
        			['pendidikan'=>"Tamat SD","data"=>['L'=>18, 'P'=>22]],
        			['pendidikan'=>"SLTP","data"=>['L'=>9, 'P'=>14]],
        			['pendidikan'=>"SLTA","data"=>['L'=>10, 'P'=>7]],
        			['pendidikan'=>"Diploma I/II","data"=>['L'=>1, 'P'=>0]],
        			['pendidikan'=>"Akademi/Diplomat III/S. Muda","data"=>['L'=>1, 'P'=>0]],
        			['pendidikan'=>"Diploma IV/Strata I","data"=>['L'=>1, 'P'=>1]],
        			['pendidikan'=>"Strata II","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Strata III","data"=>['L'=>0, 'P'=>0]],
        		]],
        		["rt"=>3, "penduduk"=>[
        			['pendidikan'=>"Tidak/Belum Sekolah","data"=>['L'=>23, 'P'=>25]],
        			['pendidikan'=>"Belum Tamat SD","data"=>['L'=>20, 'P'=>20]],
        			['pendidikan'=>"Tamat SD","data"=>['L'=>16, 'P'=>25]],
        			['pendidikan'=>"SLTP","data"=>['L'=>17, 'P'=>20]],
        			['pendidikan'=>"SLTA","data"=>['L'=>18, 'P'=>15]],
        			['pendidikan'=>"Diploma I/II","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Akademi/Diplomat III/S. Muda","data"=>['L'=>1, 'P'=>0]],
        			['pendidikan'=>"Diploma IV/Strata I","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Strata II","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Strata III","data"=>['L'=>0, 'P'=>0]],
        		]],
        		["rt"=>4, "penduduk"=>[
        			['pendidikan'=>"Tidak/Belum Sekolah","data"=>['L'=>34, 'P'=>28]],
        			['pendidikan'=>"Belum Tamat SD","data"=>['L'=>15, 'P'=>15]],
        			['pendidikan'=>"Tamat SD","data"=>['L'=>44, 'P'=>30]],
        			['pendidikan'=>"SLTP","data"=>['L'=>14, 'P'=>16]],
        			['pendidikan'=>"SLTA","data"=>['L'=>14, 'P'=>18]],
        			['pendidikan'=>"Diploma I/II","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Akademi/Diplomat III/S. Muda","data"=>['L'=>0, 'P'=>1]],
        			['pendidikan'=>"Diploma IV/Strata I","data"=>['L'=>3, 'P'=>3]],
        			['pendidikan'=>"Strata II","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Strata III","data"=>['L'=>0, 'P'=>0]],
        		]],
        		["rt"=>5, "penduduk"=>[
        			['pendidikan'=>"Tidak/Belum Sekolah","data"=>['L'=>54, 'P'=>38]],
        			['pendidikan'=>"Belum Tamat SD","data"=>['L'=>23, 'P'=>23]],
        			['pendidikan'=>"Tamat SD","data"=>['L'=>43, 'P'=>43]],
        			['pendidikan'=>"SLTP","data"=>['L'=>23, 'P'=>23]],
        			['pendidikan'=>"SLTA","data"=>['L'=>19, 'P'=>17]],
        			['pendidikan'=>"Diploma I/II","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Akademi/Diplomat III/S. Muda","data"=>['L'=>2, 'P'=>5]],
        			['pendidikan'=>"Diploma IV/Strata I","data"=>['L'=>5, 'P'=>8]],
        			['pendidikan'=>"Strata II","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Strata III","data"=>['L'=>0, 'P'=>0]],
        		]],
        		["rt"=>6, "penduduk"=>[
        			['pendidikan'=>"Tidak/Belum Sekolah","data"=>['L'=>24, 'P'=>33]],
        			['pendidikan'=>"Belum Tamat SD","data"=>['L'=>26, 'P'=>26]],
        			['pendidikan'=>"Tamat SD","data"=>['L'=>30, 'P'=>25]],
        			['pendidikan'=>"SLTP","data"=>['L'=>15, 'P'=>19]],
        			['pendidikan'=>"SLTA","data"=>['L'=>10, 'P'=>15]],
        			['pendidikan'=>"Diploma I/II","data"=>['L'=>0, 'P'=>1]],
        			['pendidikan'=>"Akademi/Diplomat III/S. Muda","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Diploma IV/Strata I","data"=>['L'=>2, 'P'=>2]],
        			['pendidikan'=>"Strata II","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Strata III","data"=>['L'=>0, 'P'=>0]],
        		]],
        		["rt"=>7, "penduduk"=>[
        			['pendidikan'=>"Tidak/Belum Sekolah","data"=>['L'=>33, 'P'=>29]],
        			['pendidikan'=>"Belum Tamat SD","data"=>['L'=>15, 'P'=>15]],
        			['pendidikan'=>"Tamat SD","data"=>['L'=>30, 'P'=>28]],
        			['pendidikan'=>"SLTP","data"=>['L'=>15, 'P'=>14]],
        			['pendidikan'=>"SLTA","data"=>['L'=>7, 'P'=>14]],
        			['pendidikan'=>"Diploma I/II","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Akademi/Diplomat III/S. Muda","data"=>['L'=>2, 'P'=>1]],
        			['pendidikan'=>"Diploma IV/Strata I","data"=>['L'=>1, 'P'=>0]],
        			['pendidikan'=>"Strata II","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Strata III","data"=>['L'=>0, 'P'=>0]],
        		]]
        	
        	]],
        	["name"=>"Jurang", "data"=>[
        		["rt"=>1, "penduduk"=>[
        			['pendidikan'=>"Tidak/Belum Sekolah","data"=>['L'=>23, 'P'=>14]],
        			['pendidikan'=>"Belum Tamat SD","data"=>['L'=>12, 'P'=>12]],
        			['pendidikan'=>"Tamat SD","data"=>['L'=>19, 'P'=>23]],
        			['pendidikan'=>"SLTP","data"=>['L'=>12, 'P'=>10]],
        			['pendidikan'=>"SLTA","data"=>['L'=>12, 'P'=>9]],
        			['pendidikan'=>"Diploma I/II","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Akademi/Diplomat III/S. Muda","data"=>['L'=>1, 'P'=>0]],
        			['pendidikan'=>"Diploma IV/Strata I","data"=>['L'=>1, 'P'=>3]],
        			['pendidikan'=>"Strata II","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Strata III","data"=>['L'=>0, 'P'=>0]],
        		]],
        		["rt"=>2, "penduduk"=>[
        			['pendidikan'=>"Tidak/Belum Sekolah","data"=>['L'=>16, 'P'=>24]],
        			['pendidikan'=>"Belum Tamat SD","data"=>['L'=>18, 'P'=>18]],
        			['pendidikan'=>"Tamat SD","data"=>['L'=>23, 'P'=>22]],
        			['pendidikan'=>"SLTP","data"=>['L'=>15, 'P'=>6]],
        			['pendidikan'=>"SLTA","data"=>['L'=>10, 'P'=>7]],
        			['pendidikan'=>"Diploma I/II","data"=>['L'=>0, 'P'=>1]],
        			['pendidikan'=>"Akademi/Diplomat III/S. Muda","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Diploma IV/Strata I","data"=>['L'=>0, 'P'=>1]],
        			['pendidikan'=>"Strata II","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Strata III","data"=>['L'=>0, 'P'=>0]],
        		]],
        		["rt"=>3, "penduduk"=>[
        			['pendidikan'=>"Tidak/Belum Sekolah","data"=>['L'=>18, 'P'=>14]],
        			['pendidikan'=>"Belum Tamat SD","data"=>['L'=>15, 'P'=>15]],
        			['pendidikan'=>"Tamat SD","data"=>['L'=>27, 'P'=>26]],
        			['pendidikan'=>"SLTP","data"=>['L'=>8, 'P'=>8]],
        			['pendidikan'=>"SLTA","data"=>['L'=>5, 'P'=>3]],
        			['pendidikan'=>"Diploma I/II","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Akademi/Diplomat III/S. Muda","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Diploma IV/Strata I","data"=>['L'=>0, 'P'=>1]],
        			['pendidikan'=>"Strata II","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Strata III","data"=>['L'=>0, 'P'=>0]],
        		]],
        		["rt"=>4, "penduduk"=>[
        			['pendidikan'=>"Tidak/Belum Sekolah","data"=>['L'=>27, 'P'=>32]],
        			['pendidikan'=>"Belum Tamat SD","data"=>['L'=>24, 'P'=>24]],
        			['pendidikan'=>"Tamat SD","data"=>['L'=>29, 'P'=>33]],
        			['pendidikan'=>"SLTP","data"=>['L'=>6, 'P'=>10]],
        			['pendidikan'=>"SLTA","data"=>['L'=>5, 'P'=>6]],
        			['pendidikan'=>"Diploma I/II","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Akademi/Diplomat III/S. Muda","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Diploma IV/Strata I","data"=>['L'=>1, 'P'=>0]],
        			['pendidikan'=>"Strata II","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Strata III","data"=>['L'=>0, 'P'=>0]],
        		]]
        	
        	]],
        	["name"=>"Kenteng", "data"=>[
        		["rt"=>1, "penduduk"=>[
        			['pendidikan'=>"Tidak/Belum Sekolah","data"=>['L'=>29, 'P'=>19]],
        			['pendidikan'=>"Belum Tamat SD","data"=>['L'=>20, 'P'=>20]],
        			['pendidikan'=>"Tamat SD","data"=>['L'=>21, 'P'=>15]],
        			['pendidikan'=>"SLTP","data"=>['L'=>13, 'P'=>10]],
        			['pendidikan'=>"SLTA","data"=>['L'=>9, 'P'=>8]],
        			['pendidikan'=>"Diploma I/II","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Akademi/Diplomat III/S. Muda","data"=>['L'=>0, 'P'=>1]],
        			['pendidikan'=>"Diploma IV/Strata I","data"=>['L'=>1, 'P'=>0]],
        			['pendidikan'=>"Strata II","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Strata III","data"=>['L'=>0, 'P'=>0]],
        		]],
        		["rt"=>2, "penduduk"=>[
        			['pendidikan'=>"Tidak/Belum Sekolah","data"=>['L'=>22, 'P'=>17]],
        			['pendidikan'=>"Belum Tamat SD","data"=>['L'=>8, 'P'=>8]],
        			['pendidikan'=>"Tamat SD","data"=>['L'=>17, 'P'=>12]],
        			['pendidikan'=>"SLTP","data"=>['L'=>9, 'P'=>12]],
        			['pendidikan'=>"SLTA","data"=>['L'=>4, 'P'=>4]],
        			['pendidikan'=>"Diploma I/II","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Akademi/Diplomat III/S. Muda","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Diploma IV/Strata I","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Strata II","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Strata III","data"=>['L'=>0, 'P'=>0]],
        		]],
        		["rt"=>3, "penduduk"=>[
        			['pendidikan'=>"Tidak/Belum Sekolah","data"=>['L'=>23, 'P'=>21]],
        			['pendidikan'=>"Belum Tamat SD","data"=>['L'=>15, 'P'=>15]],
        			['pendidikan'=>"Tamat SD","data"=>['L'=>14, 'P'=>23]],
        			['pendidikan'=>"SLTP","data"=>['L'=>17, 'P'=>12]],
        			['pendidikan'=>"SLTA","data"=>['L'=>5, 'P'=>6]],
        			['pendidikan'=>"Diploma I/II","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Akademi/Diplomat III/S. Muda","data"=>['L'=>1, 'P'=>1]],
        			['pendidikan'=>"Diploma IV/Strata I","data"=>['L'=>2, 'P'=>1]],
        			['pendidikan'=>"Strata II","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Strata III","data"=>['L'=>0, 'P'=>0]],
        		]],
        		["rt"=>4, "penduduk"=>[
        			['pendidikan'=>"Tidak/Belum Sekolah","data"=>['L'=>20, 'P'=>12]],
        			['pendidikan'=>"Belum Tamat SD","data"=>['L'=>10, 'P'=>10]],
        			['pendidikan'=>"Tamat SD","data"=>['L'=>11, 'P'=>18]],
        			['pendidikan'=>"SLTP","data"=>['L'=>14, 'P'=>9]],
        			['pendidikan'=>"SLTA","data"=>['L'=>10, 'P'=>9]],
        			['pendidikan'=>"Diploma I/II","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Akademi/Diplomat III/S. Muda","data"=>['L'=>1, 'P'=>1]],
        			['pendidikan'=>"Diploma IV/Strata I","data"=>['L'=>2, 'P'=>2]],
        			['pendidikan'=>"Strata II","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Strata III","data"=>['L'=>0, 'P'=>0]],
        		]]
        	
        	]],

        	["name"=>"Gelaran", "data"=>[
        		["rt"=>1, "penduduk"=>[
        			['pendidikan'=>"Tidak/Belum Sekolah","data"=>['L'=>35, 'P'=>40]],
        			['pendidikan'=>"Belum Tamat SD","data"=>['L'=>20, 'P'=>20]],
        			['pendidikan'=>"Tamat SD","data"=>['L'=>37, 'P'=>30]],
        			['pendidikan'=>"SLTP","data"=>['L'=>24, 'P'=>25]],
        			['pendidikan'=>"SLTA","data"=>['L'=>23, 'P'=>20]],
        			['pendidikan'=>"Diploma I/II","data"=>['L'=>0, 'P'=>2]],
        			['pendidikan'=>"Akademi/Diplomat III/S. Muda","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Diploma IV/Strata I","data"=>['L'=>4, 'P'=>0]],
        			['pendidikan'=>"Strata II","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Strata III","data"=>['L'=>0, 'P'=>0]],
        		]],
        		["rt"=>2, "penduduk"=>[
        			['pendidikan'=>"Tidak/Belum Sekolah","data"=>['L'=>27, 'P'=>24]],
        			['pendidikan'=>"Belum Tamat SD","data"=>['L'=>18, 'P'=>18]],
        			['pendidikan'=>"Tamat SD","data"=>['L'=>27, 'P'=>19]],
        			['pendidikan'=>"SLTP","data"=>['L'=>11, 'P'=>18]],
        			['pendidikan'=>"SLTA","data"=>['L'=>26, 'P'=>21]],
        			['pendidikan'=>"Diploma I/II","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Akademi/Diplomat III/S. Muda","data"=>['L'=>3, 'P'=>1]],
        			['pendidikan'=>"Diploma IV/Strata I","data"=>['L'=>8, 'P'=>6]],
        			['pendidikan'=>"Strata II","data"=>['L'=>0, 'P'=>1]],
        			['pendidikan'=>"Strata III","data"=>['L'=>0, 'P'=>0]],
        		]],
        		["rt"=>3, "penduduk"=>[
        			['pendidikan'=>"Tidak/Belum Sekolah","data"=>['L'=>17, 'P'=>14]],
        			['pendidikan'=>"Belum Tamat SD","data"=>['L'=>7, 'P'=>7]],
        			['pendidikan'=>"Tamat SD","data"=>['L'=>12, 'P'=>14]],
        			['pendidikan'=>"SLTP","data"=>['L'=>12, 'P'=>6]],
        			['pendidikan'=>"SLTA","data"=>['L'=>16, 'P'=>17]],
        			['pendidikan'=>"Diploma I/II","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Akademi/Diplomat III/S. Muda","data"=>['L'=>2, 'P'=>0]],
        			['pendidikan'=>"Diploma IV/Strata I","data"=>['L'=>0, 'P'=>4]],
        			['pendidikan'=>"Strata II","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Strata III","data"=>['L'=>0, 'P'=>0]],
        		]],
        		["rt"=>4, "penduduk"=>[
        			['pendidikan'=>"Tidak/Belum Sekolah","data"=>['L'=>16, 'P'=>13]],
        			['pendidikan'=>"Belum Tamat SD","data"=>['L'=>6, 'P'=>6]],
        			['pendidikan'=>"Tamat SD","data"=>['L'=>9, 'P'=>13]],
        			['pendidikan'=>"SLTP","data"=>['L'=>8, 'P'=>10]],
        			['pendidikan'=>"SLTA","data"=>['L'=>18, 'P'=>13]],
        			['pendidikan'=>"Diploma I/II","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Akademi/Diplomat III/S. Muda","data"=>['L'=>1, 'P'=>1]],
        			['pendidikan'=>"Diploma IV/Strata I","data"=>['L'=>2, 'P'=>1]],
        			['pendidikan'=>"Strata II","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Strata III","data"=>['L'=>0, 'P'=>0]],
        		]]
        	
        	]],

        	["name"=>"Clowok", "data"=>[
        			["rt"=>1, "penduduk"=>[
        			['pendidikan'=>"Tidak/Belum Sekolah","data"=>['L'=>24, 'P'=>19]],
        			['pendidikan'=>"Belum Tamat SD","data"=>['L'=>20, 'P'=>20]],
        			['pendidikan'=>"Tamat SD","data"=>['L'=>16, 'P'=>15]],
        			['pendidikan'=>"SLTP","data"=>['L'=>9, 'P'=>8]],
        			['pendidikan'=>"SLTA","data"=>['L'=>5, 'P'=>10]],
        			['pendidikan'=>"Diploma I/II","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Akademi/Diplomat III/S. Muda","data"=>['L'=>0, 'P'=>2]],
        			['pendidikan'=>"Diploma IV/Strata I","data"=>['L'=>4, 'P'=>4]],
        			['pendidikan'=>"Strata II","data"=>['L'=>1, 'P'=>0]],
        			['pendidikan'=>"Strata III","data"=>['L'=>0, 'P'=>0]],
        		]],
        		["rt"=>2, "penduduk"=>[
        			['pendidikan'=>"Tidak/Belum Sekolah","data"=>['L'=>22, 'P'=>28]],
        			['pendidikan'=>"Belum Tamat SD","data"=>['L'=>16, 'P'=>16]],
        			['pendidikan'=>"Tamat SD","data"=>['L'=>20, 'P'=>19]],
        			['pendidikan'=>"SLTP","data"=>['L'=>13, 'P'=>13]],
        			['pendidikan'=>"SLTA","data"=>['L'=>10, 'P'=>14]],
        			['pendidikan'=>"Diploma I/II","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Akademi/Diplomat III/S. Muda","data"=>['L'=>1, 'P'=>0]],
        			['pendidikan'=>"Diploma IV/Strata I","data"=>['L'=>1, 'P'=>1]],
        			['pendidikan'=>"Strata II","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Strata III","data"=>['L'=>0, 'P'=>0]],
        		]],
        	
        	]],

        	["name"=>"Ampelgading", "data"=>[
        		["rt"=>1, "penduduk"=>[
        			['pendidikan'=>"Tidak/Belum Sekolah","data"=>['L'=>37, 'P'=>28]],
        			['pendidikan'=>"Belum Tamat SD","data"=>['L'=>28, 'P'=>28]],
        			['pendidikan'=>"Tamat SD","data"=>['L'=>28, 'P'=>28]],
        			['pendidikan'=>"SLTP","data"=>['L'=>21, 'P'=>24]],
        			['pendidikan'=>"SLTA","data"=>['L'=>9, 'P'=>7]],
        			['pendidikan'=>"Diploma I/II","data"=>['L'=>1, 'P'=>0]],
        			['pendidikan'=>"Akademi/Diplomat III/S. Muda","data"=>['L'=>1, 'P'=>1]],
        			['pendidikan'=>"Diploma IV/Strata I","data"=>['L'=>1, 'P'=>2]],
        			['pendidikan'=>"Strata II","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Strata III","data"=>['L'=>0, 'P'=>0]],
        		]],
        		["rt"=>2, "penduduk"=>[
        			['pendidikan'=>"Tidak/Belum Sekolah","data"=>['L'=>16, 'P'=>37]],
        			['pendidikan'=>"Belum Tamat SD","data"=>['L'=>20, 'P'=>20]],
        			['pendidikan'=>"Tamat SD","data"=>['L'=>29, 'P'=>22]],
        			['pendidikan'=>"SLTP","data"=>['L'=>14, 'P'=>14]],
        			['pendidikan'=>"SLTA","data"=>['L'=>4, 'P'=>10]],
        			['pendidikan'=>"Diploma I/II","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Akademi/Diplomat III/S. Muda","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Diploma IV/Strata I","data"=>['L'=>1, 'P'=>4]],
        			['pendidikan'=>"Strata II","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Strata III","data"=>['L'=>0, 'P'=>0]],
        		]],
        		["rt"=>3, "penduduk"=>[
        			['pendidikan'=>"Tidak/Belum Sekolah","data"=>['L'=>25, 'P'=>15]],
        			['pendidikan'=>"Belum Tamat SD","data"=>['L'=>15, 'P'=>15]],
        			['pendidikan'=>"Tamat SD","data"=>['L'=>15, 'P'=>18]],
        			['pendidikan'=>"SLTP","data"=>['L'=>14, 'P'=>10]],
        			['pendidikan'=>"SLTA","data"=>['L'=>13, 'P'=>12]],
        			['pendidikan'=>"Diploma I/II","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Akademi/Diplomat III/S. Muda","data"=>['L'=>0, 'P'=>1]],
        			['pendidikan'=>"Diploma IV/Strata I","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Strata II","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Strata III","data"=>['L'=>0, 'P'=>0]],
        		]],
        		["rt"=>4, "penduduk"=>[
        			['pendidikan'=>"Tidak/Belum Sekolah","data"=>['L'=>20, 'P'=>28]],
        			['pendidikan'=>"Belum Tamat SD","data"=>['L'=>24, 'P'=>24]],
        			['pendidikan'=>"Tamat SD","data"=>['L'=>19, 'P'=>19]],
        			['pendidikan'=>"SLTP","data"=>['L'=>9, 'P'=>16]],
        			['pendidikan'=>"SLTA","data"=>['L'=>14, 'P'=>9]],
        			['pendidikan'=>"Diploma I/II","data"=>['L'=>0, 'P'=>2]],
        			['pendidikan'=>"Akademi/Diplomat III/S. Muda","data"=>['L'=>2, 'P'=>2]],
        			['pendidikan'=>"Diploma IV/Strata I","data"=>['L'=>3, 'P'=>4]],
        			['pendidikan'=>"Strata II","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Strata III","data"=>['L'=>0, 'P'=>0]],
        		]],
        		["rt"=>5, "penduduk"=>[
        			['pendidikan'=>"Tidak/Belum Sekolah","data"=>['L'=>17, 'P'=>16]],
        			['pendidikan'=>"Belum Tamat SD","data"=>['L'=>19, 'P'=>19]],
        			['pendidikan'=>"Tamat SD","data"=>['L'=>23, 'P'=>17]],
        			['pendidikan'=>"SLTP","data"=>['L'=>8, 'P'=>14]],
        			['pendidikan'=>"SLTA","data"=>['L'=>11, 'P'=>13]],
        			['pendidikan'=>"Diploma I/II","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Akademi/Diplomat III/S. Muda","data"=>['L'=>0, 'P'=>2]],
        			['pendidikan'=>"Diploma IV/Strata I","data"=>['L'=>5, 'P'=>5]],
        			['pendidikan'=>"Strata II","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Strata III","data"=>['L'=>0, 'P'=>0]],
        		]]

        	]],

        	["name"=>"Golak", "data"=>[
        		["rt"=>1, "penduduk"=>[
        			['pendidikan'=>"Tidak/Belum Sekolah","data"=>['L'=>23, 'P'=>26]],
        			['pendidikan'=>"Belum Tamat SD","data"=>['L'=>10, 'P'=>10]],
        			['pendidikan'=>"Tamat SD","data"=>['L'=>21, 'P'=>12]],
        			['pendidikan'=>"SLTP","data"=>['L'=>9, 'P'=>11]],
        			['pendidikan'=>"SLTA","data"=>['L'=>21, 'P'=>25]],
        			['pendidikan'=>"Diploma I/II","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Akademi/Diplomat III/S. Muda","data"=>['L'=>1, 'P'=>2]],
        			['pendidikan'=>"Diploma IV/Strata I","data"=>['L'=>2, 'P'=>4]],
        			['pendidikan'=>"Strata II","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Strata III","data"=>['L'=>0, 'P'=>0]],
        		]],
        		["rt"=>2, "penduduk"=>[
        			['pendidikan'=>"Tidak/Belum Sekolah","data"=>['L'=>23, 'P'=>33]],
        			['pendidikan'=>"Belum Tamat SD","data"=>['L'=>18, 'P'=>18]],
        			['pendidikan'=>"Tamat SD","data"=>['L'=>19, 'P'=>23]],
        			['pendidikan'=>"SLTP","data"=>['L'=>17, 'P'=>13]],
        			['pendidikan'=>"SLTA","data"=>['L'=>19, 'P'=>20]],
        			['pendidikan'=>"Diploma I/II","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Akademi/Diplomat III/S. Muda","data"=>['L'=>5, 'P'=>4]],
        			['pendidikan'=>"Diploma IV/Strata I","data"=>['L'=>6, 'P'=>5]],
        			['pendidikan'=>"Strata II","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Strata III","data"=>['L'=>0, 'P'=>0]],
        		]],
        		["rt"=>3, "penduduk"=>[
        			['pendidikan'=>"Tidak/Belum Sekolah","data"=>['L'=>24, 'P'=>25]],
        			['pendidikan'=>"Belum Tamat SD","data"=>['L'=>10, 'P'=>10]],
        			['pendidikan'=>"Tamat SD","data"=>['L'=>23, 'P'=>24]],
        			['pendidikan'=>"SLTP","data"=>['L'=>9, 'P'=>10]],
        			['pendidikan'=>"SLTA","data"=>['L'=>13, 'P'=>13]],
        			['pendidikan'=>"Diploma I/II","data"=>['L'=>0, 'P'=>1]],
        			['pendidikan'=>"Akademi/Diplomat III/S. Muda","data"=>['L'=>1, 'P'=>2]],
        			['pendidikan'=>"Diploma IV/Strata I","data"=>['L'=>1, 'P'=>1]],
        			['pendidikan'=>"Strata II","data"=>['L'=>0, 'P'=>0]],
        			['pendidikan'=>"Strata III","data"=>['L'=>0, 'P'=>0]],
        		]],
        	
        	]],

        ];
        $getDusun = App\Dusun::with('rukun_tetanggas')->get();
        $getPendidikan = App\Pendidikan::get();
        foreach($dusuns as $key=>$value){
        	$dusun_index = $getDusun->search(function($item, $key)use($value){
        		return $item->name==$value['name'];
        	});
        	foreach($value['data'] as $key2=>$value2){
        		$rt_index = $getDusun[$dusun_index]->rukun_tetanggas->search(function($item, $key)use($value2){
        			return $item->rt_no==$value2["rt"];
        		});
        		foreach($value2['penduduk'] as $key3=>$value3){
        			$pendidikan_index = $getPendidikan->search(function($item, $key)use($value3){
        				return $item->name==$value3['pendidikan'];
        			});
        			$data = ['rukun_tetangga_id'=>$getDusun[$dusun_index]->rukun_tetanggas[$rt_index]->id, 'pendidikan_id'=>$getPendidikan[$pendidikan_index]->id,'gender'=>'L','jumlah'=>$value3['data']['L']];
        			$data2 = ['rukun_tetangga_id'=>$getDusun[$dusun_index]->rukun_tetanggas[$rt_index]->id, 'pendidikan_id'=>$getPendidikan[$pendidikan_index]->id,'gender'=>'P','jumlah'=>$value3['data']['P']];
        			App\BasedPendidikan::create($data);
        			App\BasedPendidikan::create($data2);
        		}
        	}
        
        }
    }
}
