<?php

use Illuminate\Database\Seeder;

class WeatherTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('weather_types')->insert([
            'type' => '雨',
        ]);
        DB::table('weather_types')->insert([
            'type' => '晴れ',
        ]);
        DB::table('weather_types')->insert([
            'type' => '曇り',
        ]);
        DB::table('weather_types')->insert([
            'type' => '雪',
        ]);
        DB::table('weather_types')->insert([
            'type' => '嵐',
        ]);
    }
}
