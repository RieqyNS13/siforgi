<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(JenisTableSeeder::class);
        $this->call(KadusesTableSeeder::class);
        $this->call(DusunsTableSeeder::class);
        $this->call(RukunTetanggaTableSeeder::class);
        $this->call(AgamasTableSeeder::class);
        $this->call(CarouselsTableSeeder::class);
        $this->call(BasedGendersTableSeeder::class);
        $this->call(BasedAgamasTableSeeder::class);
        $this->call(GoldarsTableSeeder::class);
        $this->call(BasedGoldarTableSeeder::class);
        $this->call(PendidikansTableSeeder::class);
        $this->call(BasedPendidikanTableSeeder::class);
        $this->call(UmursTableSeeder::class);
        $this->call(BasedUmurTableSeeder::class);
        $this->call(LocationsTableSeeder::class);
    }
}
