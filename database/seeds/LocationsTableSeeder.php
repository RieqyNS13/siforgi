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
        })]->id, 'name'=>'Kepala Dusun','Latitude'=>'-7.226281381985734', 'Longitude'=>'110.39442731710324'],

            ['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Jurang";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="Perangkat Desa";
        })]->id, 'name'=>'Kepala Dusun','Latitude'=>'-7.229910128589134', 'Longitude'=>'110.39268148907206'],

             ['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Kenteng";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="Perangkat Desa";
        })]->id, 'name'=>'Kepala Dusun','Latitude'=>'-7.235541871079118', 'Longitude'=>'110.39619933352299'],

              ['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Gelaran";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="Perangkat Desa";
        })]->id, 'name'=>'Kepala Dusun','Latitude'=>'-7.235667656688348', 'Longitude'=>'110.38378132755201'],

              ['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Clowok";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="Perangkat Desa";
        })]->id,  'name'=>'Kepala Dusun','Latitude'=>'-7.229215450806829', 'Longitude'=>'110.39043719878543'],

              ['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Ampelgading";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="Perangkat Desa";
        })]->id, 'name'=>'Kepala Dusun','Latitude'=>'-7.223111125537149', 'Longitude'=>'110.38205398711557'],

            ['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Golak";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="Perangkat Desa";
        })]->id, 'name'=>'Kepala Dusun','Latitude'=>'-7.225772040885033', 'Longitude'=>'110.38378669413919'],

        ['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Karanglo";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="UMKM";
        })]->id, 'name'=>'Omah Tahu Asri Serasi Ibu Subiyati dan Pak Tris', 'description'=>'Tahu serasi merupakan tahu putih seperti tahu biasanya tetapi tahu ini memiliki khas yaitu memiliki tekstur yang sangat padat namun tahu ini tetap halus

Alamat produksi: Dusun Karanglo, Desa Kenteng, Bandungan
CP: 08132566283/081390865289', 'Latitude'=>'-7.2223497591585275', 'Longitude'=>'110.3925012885818'],

	 ['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Karanglo";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="UMKM";
        })]->id, 'name'=>'Tempe Nur Khas Bandungan Ibu Nuriyah', 'description'=>'Tempe yang diproduksi oleh Ibu Nur ini merupakan tempe yang di olah seperti pada tempe lainnya tetapi pada tempe ini untuk menjaga kealamiannya menggunakan bungkus dari daun pisang sehingga rasa pada tempe ini tetap natural dan sehat', 'Latitude'=>'-7.226075042534115', 'Longitude'=>'110.39202921979518'],

         ['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Karanglo";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="UMKM";
        })]->id, 'name'=>'Tempe & Tahu Ibu Turni', 'description'=>'Alamat Produksi: Dusun Karanglo, Desa Kenteng, Bandungan
CP: 082313840623/085826271078', 'Latitude'=>'-7.222598821854033', 'Longitude'=>'110.39309137456507'],

 		['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Gelaran";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="UMKM";
        })]->id, 'name'=>'Keripik Ibu Sri Wulan dan Ibu Yuliwarti', 'description'=>'Aneka kue keripik
CP: 085226295875', 'Latitude'=>'-7.233928522278801', 'Longitude'=>'110.38189573461455'],

		['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Gelaran";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="UMKM";
        })]->id, 'name'=>'Katering Ibu Istiani', 'description'=>'Aneka kue kering, snack kering dan katering
CP: 082136428804', 'Latitude'=>'-7.234354259591821', 'Longitude'=>'110.38144512350004'],

		['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Gelaran";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="UMKM";
        })]->id, 'name'=>'Aneka Kue Basash Ibu Parsuni', 'description'=>'Produk yang dihasilkan oleh Ibu Parsuni merupakan makanan basah produk yang dihasilkan antara lain Resoles, molen, lumpia dll', 'Latitude'=>'-7.23426698348755', 'Longitude'=>'110.38111789400023'],

        ['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Gelaran";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="UMKM";
        })]->id, 'name'=>'Aneka Kue Basash Ibu Nurul', 'description'=>'Produk yang dihasilkan oleh Ibu Nurul merupakan makanan basah produk yang dihasilkan antara lain pie kacang ijo, molen, brownis dll
        CP: 081225102918', 'Latitude'=>'-7.234719329030129', 'Longitude'=>'110.37995917970579'],

          ['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Gelaran";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="UMKM";
        })]->id, 'name'=>'Pangsit Original & Varian Rasa Mustova', 'description'=>'Jenis makanan ringan yang terbuat dari bahan dasar tepung terigu tapioka dan bumbu tambahan yang diolah sehingga menjadi sebua keripik pangsit.

CP: 085290707435', 'Latitude'=>'-7.234880044635451', 'Longitude'=>'110.38441701108854'],

		['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Gelaran";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="UMKM";
        })]->id, 'name'=>'Getuk Kimpul Sri Mumpuni', 'description'=>'Getuk kimpul yang diproduksi oleh Ibu Sri Mumpuni ini merupakan makanan cemilan basah yang berbahan dasar kimpul di tumbuk dan diolah sedemikian rupa sehingga menjadi Gethuk Kimpul

CP: 085950768133', 'Latitude'=>'-7.234869401219911', 'Longitude'=>'110.38229270154875'],

		['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Golak";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="UMKM";
        })]->id, 'name'=>'Aneka Macam Stik & Bandrek Minuman Penghangat Ibu Mugi Rahayu', 'description'=>'CP: 082134334409', 'Latitude'=>'-7.223292068277169', 'Longitude'=>'110.38227392825479'],

        ['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Karanglo";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="UMKM";
        })]->id, 'name'=>'Tahu BB Serasi & Susu Kedelai Ibu HJ. Khotijah', 'description'=>'CP: 081325574453', 'Latitude'=>'-7.227590691831425', 'Longitude'=>'110.39398186795802'],

         ['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Ampelgading";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="UMKM";
        })]->id, 'name'=>'Manisan Ibu Sri Ngestiwati', 'description'=>'Makanan manisan yang diproduksi oleh Ibu Sri Ngestiwti merupakan olahan makanan yang berbahan dasar tomat dan pepaya sehingga menjadi aneka makanan yang menjadi oleh-oleh khas bandungan. Produk:
-Torakur(Tomat Rasa Kurma) (PIRT: 2143322020007-21)
-Jenang Pepaya (PIRT: 2143322030007-21)
-Pepaya Candy (PIRT: 2143322030007-21)

CP: (0298)711398', 'Latitude'=>'-7.223642803003528', 'Longitude'=>'110.38428041797329'],

		['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Clowok";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="UMKM";
        })]->id, 'name'=>'Pangsit Pedas & Original ISAROH', 'description'=>'Jenis makanan rngan yang terbuat dari bahan dasar tepung terigu tapiok dan bumbu tambahan yang diolah sehingga menjadi sebuah keripik pangsit

CP: 085710434985', 'Latitude'=>'-7.226529011131787', 'Longitude'=>'110.39151544680942'],

		['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Kenteng";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="UMKM";
        })]->id, 'name'=>'Tahu B Serasi Ibu Riyanti', 'description'=>'(PIRT: 2153322010359-18) Tahu serasi merupakan tahu putih seperti tahu biasanya tetapi tahu ini memiliki khas yaitu memiliki tekstur yang sangat padat namun tahu ini tetap halus', 'Latitude'=>'-7.236209162709295', 'Longitude'=>'110.39643242992099'],

        ['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Ampelgading";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="UMKM";
        })]->id, 'name'=>'Solafida Ibu Sri Kusriani', 'description'=>'SOLAFIDE merupakan rumah produksi milik Ibu Sri Kusriani yang memproduksi aneka kripik sayur dan juga minuman tradisional.

Produk:
-Kripik (PIRT: 2043322010745-17)
-Egg Roll (PIRT: 2043322020714-17)', 'Latitude'=>'-7.224034509364935', 'Longitude'=>'110.38100812297512'],

		  ['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Ampelgading";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="UMKM";
        })]->id, 'name'=>'Kopi Laos Eva Purwanti', 'description'=>'(PIRT: 2133322010744-7) Kopi laos merupakan minuman khas bandungan yang diproduksi oleh Ibu Eva Purwanti, minuman kopi ini terbuat dari campuran aneka rempah-rempah yang mempunyai banyak khasiat untuk kesehatan tubuh.

CP: 085290634810/085713441117', 'Latitude'=>'-7.224971151440554', 'Longitude'=>'110.38263890605617'],

		 ['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Clowok";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="UMKM";
        })]->id, 'name'=>'Aneka Snack Kering Ibu Mulyani', 'description'=>'(PIRT: 20632201076517) Bu Mulyani memproduksi aneka macam snack kering seperti kucing gajah, untir-untir, pastel dll. Hasil olahan yang diproduksi oleh Bu Mulyani merupakan makanan cemilan ringan

CP: 082138084972', 'Latitude'=>'-7.226652476919342', 'Longitude'=>'110.39155836215366'],

		 ['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Clowok";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="UMKM";
        })]->id, 'name'=>'Tempe ASEP', 'description'=>'Tempe yang diproduksi oleh Mas Asep ini merupakan tempe dari bahan dasar kedelai yang dijual di pasaran dengan menggunakan bahan pembungkus plastik', 'Latitude'=>'-7.229866835499718', 'Longitude'=>'110.38855428805698'],

        ['dusun_id'=>$dusuns[$dusuns->search(function($item, $key){
            return $item->name=="Clowok";
        })]->id, 'jenis_id'=>$jenises[$jenises->search(function($item, $key){
        	return $item->name=="UMKM";
        })]->id, 'name'=>'Keripik Talas Ibu Maryamah', 'description'=>'Keripik talas yang diproduksioleh Ibu Maryamah berbahan dasar talas/kimpul yang dipotong setipis mungkin sehingga dimasak menjadi keripik, makanan ini sejenis makanan kering yang biasanya digunakan untuk cemilan

        CP: 083144715973', 'Latitude'=>'-7.229866835499718', 'Longitude'=>'110.38855428805698'],

        ];
        foreach($datas as $key=>$value){
        	App\Location::create($value);
        }
    }
}
