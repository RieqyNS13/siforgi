<?php

use Illuminate\Database\Seeder;

class CarouselsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
        	['name'=>"I'AMpelgading HOMELAND", 'image_url'=>'https://explorewisata.com/wp-content/uploads/2018/12/asyiknya-liburan-di-iampelgading-homeland-semarang.jpg'],
        	['name'=>'KKN Alter 2A Unnes menggelar lomba mewarnai dan memasukkan bola dalam keranjang untuk anak-anak di Dusun Ampelgading dengan katagori TK', 'image_url'=>'http://kenteng-bandungan.sideka.id/wp-content/uploads/sites/3099/2019/07/WhatsApp-Image-2019-07-29-at-20.33.35-678x381.jpeg'],
        	['name'=>'KKN Alter 2A Unnes mengajar mengaji di TPQ ATTAQWA', 'image_url'=>'http://kenteng-bandungan.sideka.id/wp-content/uploads/sites/3099/2019/07/IMG20190725165604-678x381.jpg']
        ];
        foreach($datas as $data)
        	DB::table('carousels')->insert($data);
    }
}
