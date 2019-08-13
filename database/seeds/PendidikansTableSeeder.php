<?php

use Illuminate\Database\Seeder;

class PendidikansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          $data=['Tidak/Belum Sekolah','Belum Tamat SD','Tamat SD','SLTP','SLTA','Diploma I/II','Akademi/Diplomat III/S. Muda','Diploma IV/Strata I','Strata II', 'Strata III'];
        foreach($data as $data_)
        	App\Pendidikan::create(['name'=>$data_]);
    }
}
