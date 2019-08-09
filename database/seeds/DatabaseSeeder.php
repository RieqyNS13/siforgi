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
        $this->call(KadusesTableSeeder::class);
        $this->call(DusunsTableSeeder::class);
        $this->call(RukunTetanggaTableSeeder::class);
        $this->call(AgamasTableSeeder::class);
        $this->call(CarouselsTableSeeder::class);
        $this->call(BasedGendersTableSeeder::class);
        $this->call(BasedAgamasTableSeeder::class);
    }
}
