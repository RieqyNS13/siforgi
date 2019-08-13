<?php

use Illuminate\Database\Seeder;

class GoldarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $data=['A','B','AB','O','A+','A-','B+','B-','AB+','AB-','O+','O-','-'];
        foreach($data as $data_)
        	App\Goldar::create(['name'=>$data_]);
    }
}
