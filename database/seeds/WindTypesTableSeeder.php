<?php

use Illuminate\Database\Seeder;

class WindTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wind_types')->insert([
            'type' => '強い',
        ]);
        DB::table('wind_types')->insert([
            'type' => '普通',
        ]);
        DB::table('wind_types')->insert([
            'type' => '弱い',
        ]);
        DB::table('wind_types')->insert([
            'type' => '無し',
        ]);
    }
}
