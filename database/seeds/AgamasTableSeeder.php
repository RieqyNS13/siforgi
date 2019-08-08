<?php

use Illuminate\Database\Seeder;

class AgamasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=['Islam','Kristen','Katholik','Budha','Hindu','Konghuchu','Kepercayaan'];
        foreach($data as $data_)
        	DB::table('agamas')->insert(['name'=>$data_]);
    }
}
