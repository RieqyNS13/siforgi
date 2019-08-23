<?php

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dusuns = App\Dusun::get();
        $jenises = App\Jenis::get();
        $datas = [
            ['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Karanglo";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="Perangkat Desa";
        })]->id, 'name'=>'Kepala Dusun Karanglo','Latitude'=>'-7.22451454', 'Longitude'=>'110.39979174'],

            ['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Jurang";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="Perangkat Desa";
        })]->id, 'name'=>'Kepala Dusun Jurang','Latitude'=>'-7.22814330', 'Longitude'=>'110.40549172'],

             ['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Kenteng";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="Perangkat Desa";
        })]->id, 'name'=>'Kepala Dusun Kenteng','Latitude'=>'-7.23075231', 'Longitude'=>'110.39424668'],

              ['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Gelaran";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="Perangkat Desa";
        })]->id, 'name'=>'Kepala Dusun Gelaran','Latitude'=>'-7.23387957', 'Longitude'=>'110.39298667'],

              ['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Clowok";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="Perangkat Desa";
        })]->id,  'name'=>'Kepala Dusun Clowok','Latitude'=>'-7.22868327', 'Longitude'=>'110.39809759'],

              ['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Ampelgading";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="Perangkat Desa";
        })]->id, 'name'=>'Kepala Dusun Ampel Gading','Latitude'=>'-7.22830522', 'Longitude'=>'110.39235367'],

            ['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Golak";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="Perangkat Desa";
        })]->id, 'name'=>'Kepala Dusun Golak','Latitude'=>'-7.22379232', 'Longitude'=>'110.39406491'],

        ['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Karanglo";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="UMKM";
        })]->id, 'name'=>'Omah Tahu Asri Serasi Ibu Subiyati dan Pak Tris', 'description'=>'Tahu serasi merupakan tahu putih seperti tahu biasanya tetapi tahu ini memiliki khas yaitu memiliki tekstur yang sangat padat namun tahu ini tetap halus

Alamat produksi: Dusun Karanglo, Desa Kenteng, Bandungan
CP: 08132566283/081390865289', 'Latitude'=>'-7.22225822', 'Longitude'=>'110.39948576'],

	 ['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Karanglo";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="UMKM";
        })]->id, 'name'=>'Tempe Nur Khas Bandungan Ibu Nuriyah', 'description'=>'Tempe yang diproduksi oleh Ibu Nur ini merupakan tempe yang di olah seperti pada tempe lainnya tetapi pada tempe ini untuk menjaga kealamiannya menggunakan bungkus dari daun pisang sehingga rasa pada tempe ini tetap natural dan sehat', 'Latitude'=>'-7.22575573', 'Longitude'=>'110.39795154'],

         ['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Karanglo";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="UMKM";
        })]->id, 'name'=>'Tempe & Tahu Ibu Turni', 'description'=>'Alamat Produksi: Dusun Karanglo, Desa Kenteng, Bandungan
CP: 082313840623/085826271078', 'Latitude'=>'-7.22181757', 'Longitude'=>'110.39838069'],

 		['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Gelaran";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="UMKM";
        })]->id, 'name'=>'Keripik Ibu Sri Wulan dan Ibu Yuliwarti', 'description'=>'Aneka kue keripik
CP: 085226295875', 'Latitude'=>'-7.23251720', 'Longitude'=>'110.39212031'],

		['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Gelaran";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="UMKM";
        })]->id, 'name'=>'Katering Ibu Istiani', 'description'=>'Aneka kue kering, snack kering dan katering
CP: 082136428804', 'Latitude'=>'-7.23107607', 'Longitude'=>'110.39114399'],

		['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Gelaran";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="UMKM";
        })]->id, 'name'=>'Aneka Kue Basah Ibu Parsuni', 'description'=>'Produk yang dihasilkan oleh Ibu Parsuni merupakan makanan basah produk yang dihasilkan antara lain Resoles, molen, lumpia dll', 'Latitude'=>'-7.23550800', 'Longitude'=>'110.39242072'],

        ['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Gelaran";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="UMKM";
        })]->id, 'name'=>'Aneka Kue Basash Ibu Nurul', 'description'=>'Produk yang dihasilkan oleh Ibu Nurul merupakan makanan basah produk yang dihasilkan antara lain pie kacang ijo, molen, brownis dll
        CP: 081225102918', 'Latitude'=>'-7.23220428	', 'Longitude'=>'110.39288206'],

          ['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Gelaran";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="UMKM";
        })]->id, 'name'=>'Pangsit Original & Varian Rasa Mustova', 'description'=>'Jenis makanan ringan yang terbuat dari bahan dasar tepung terigu tapioka dan bumbu tambahan yang diolah sehingga menjadi sebua keripik pangsit.

CP: 085290707435', 'Latitude'=>'-7.23135067', 'Longitude'=>'110.38972242'],

		['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Gelaran";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="UMKM";
        })]->id, 'name'=>'Getuk Kimpul Sri Mumpuni', 'description'=>'Getuk kimpul yang diproduksi oleh Ibu Sri Mumpuni ini merupakan makanan cemilan basah yang berbahan dasar kimpul di tumbuk dan diolah sedemikian rupa sehingga menjadi Gethuk Kimpul

CP: 085950768133', 'Latitude'=>'-7.23335697', 'Longitude'=>'110.39068802'],

		['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Golak";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="UMKM";
        })]->id, 'name'=>'Aneka Macam Stik & Bandrek Minuman Penghangat Ibu Mugi Rahayu', 'description'=>'CP: 082134334409', 'Latitude'=>'-7.22229156', 'Longitude'=>'110.39388253'],

        ['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Karanglo";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="UMKM";
        })]->id, 'name'=>'Tahu BB Serasi & Susu Kedelai Ibu HJ. Khotijah', 'description'=>'CP: 081325574453', 'Latitude'=>'-7.22365255', 'Longitude'=>'110.39580577'],

         ['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Ampelgading";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="UMKM";
        })]->id, 'name'=>'Manisan Ibu Sri Ngestiwati', 'description'=>'Makanan manisan yang diproduksi oleh Ibu Sri Ngestiwti merupakan olahan makanan yang berbahan dasar tomat dan pepaya sehingga menjadi aneka makanan yang menjadi oleh-oleh khas bandungan. Produk:
-Torakur(Tomat Rasa Kurma) (PIRT: 2143322020007-21)
-Jenang Pepaya (PIRT: 2143322030007-21)
-Pepaya Candy (PIRT: 2143322030007-21)

CP: (0298)711398', 'Latitude'=>'-7.22513291', 'Longitude'=>'110.38706992'],

		['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Clowok";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="UMKM";
        })]->id, 'name'=>'Pangsit Pedas & Original ISAROH', 'description'=>'Jenis makanan rngan yang terbuat dari bahan dasar tepung terigu tapiok dan bumbu tambahan yang diolah sehingga menjadi sebuah keripik pangsit

CP: 085710434985', 'Latitude'=>'-7.22690793	', 'Longitude'=>'110.39383287'],

		['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Kenteng";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="UMKM";
        })]->id, 'name'=>'Tahu B Serasi Ibu Riyanti', 'description'=>'(PIRT: 2153322010359-18) Tahu serasi merupakan tahu putih seperti tahu biasanya tetapi tahu ini memiliki khas yaitu memiliki tekstur yang sangat padat namun tahu ini tetap halus', 'Latitude'=>'-7.23141961', 'Longitude'=>'110.39651826'],

        ['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Ampelgading";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="UMKM";
        })]->id, 'name'=>'Solafida Ibu Sri Kusriani', 'description'=>'SOLAFIDE merupakan rumah produksi milik Ibu Sri Kusriani yang memproduksi aneka kripik sayur dan juga minuman tradisional.

Produk:
-Kripik (PIRT: 2043322010745-17)
-Egg Roll (PIRT: 2043322020714-17)', 'Latitude'=>'-7.22810037', 'Longitude'=>'110.38789604'],

		  ['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Ampelgading";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="UMKM";
        })]->id, 'name'=>'Kopi Laos Eva Purwanti', 'description'=>'(PIRT: 2133322010744-7) Kopi laos merupakan minuman khas bandungan yang diproduksi oleh Ibu Eva Purwanti, minuman kopi ini terbuat dari campuran aneka rempah-rempah yang mempunyai banyak khasiat untuk kesehatan tubuh.

CP: 085290634810/085713441117', 'Latitude'=>'-7.22865384', 'Longitude'=>'110.38980577'],

		 ['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Clowok";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="UMKM";
        })]->id, 'name'=>'Aneka Snack Kering Ibu Mulyani', 'description'=>'(PIRT: 20632201076517) Bu Mulyani memproduksi aneka macam snack kering seperti kucing gajah, untir-untir, pastel dll. Hasil olahan yang diproduksi oleh Bu Mulyani merupakan makanan cemilan ringan

CP: 082138084972', 'Latitude'=>'-7.22806169', 'Longitude'=>'110.39677258'],

		 ['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Clowok";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="UMKM";
        })]->id, 'name'=>'Tempe ASEP', 'description'=>'Tempe yang diproduksi oleh Mas Asep ini merupakan tempe dari bahan dasar kedelai yang dijual di pasaran dengan menggunakan bahan pembungkus plastik', 'Latitude'=>'-7.22835546', 'Longitude'=>'110.39447661'],

        ['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Clowok";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="UMKM";
        })]->id, 'name'=>'Keripik Talas Ibu Maryamah', 'description'=>'Keripik talas yang diproduksioleh Ibu Maryamah berbahan dasar talas/kimpul yang dipotong setipis mungkin sehingga dimasak menjadi keripik, makanan ini sejenis makanan kering yang biasanya digunakan untuk cemilan

        CP: 083144715973', 'Latitude'=>'-7.22831288', 'Longitude'=>'110.39561386'],

        ];
        foreach($datas as $key=>$value){
        	App\Location::create($value);
        }
    }
}
