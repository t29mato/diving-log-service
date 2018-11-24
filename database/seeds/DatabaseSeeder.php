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
        $this->call(EntryTypesTableSeeder::class);
        $this->call(GasTypesTableSeeder::class);
        $this->call(PurposeTypesTableSeeder::class);
        $this->call(TankTypesTableSeeder::class);
        $this->call(TideTypesTableSeeder::class);
        $this->call(WeatherTypesTableSeeder::class);
        $this->call(WindTypesTableSeeder::class);
    }
}
