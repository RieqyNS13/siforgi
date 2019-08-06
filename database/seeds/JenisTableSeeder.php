<?php

use Illuminate\Database\Seeder;

class JenisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
        	['name'=>'UMKM','description'=>'Usaha produktif yang dimiliki perorangan maupun badan usaha yang telah memenuhi kriteria sebagai usaha mikro'],
        	['name'=>'Potensi Desa','description'=>'Usaha produktif yang dimiliki perorangan maupun badan usaha yang telah memenuhi kriteria sebagai usaha mikro'],

        ];
        foreach($data as $data_){
        	DB::table('jenis')->insert($data_);
        }
    }
}
