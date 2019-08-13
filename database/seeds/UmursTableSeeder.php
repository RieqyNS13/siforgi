<?php

use Illuminate\Database\Seeder;

class UmursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=['0-4','5-9','10-14','15-19','20-24','25-29','30-34','35-39','40-44', '45-49', '50-54', '55-59', '60-64','65-69','70-74','>=75'];
        foreach($data as $data_)
        	App\Umur::create(['name'=>$data_]);
    }
}
