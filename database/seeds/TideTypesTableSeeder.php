<?php

use Illuminate\Database\Seeder;

class TideTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tide_types')->insert([
            'type' => '強い',
        ]);
        DB::table('tide_types')->insert([
            'type' => '普通',
        ]);
        DB::table('tide_types')->insert([
            'type' => '弱い',
        ]);
        DB::table('tide_types')->insert([
            'type' => '無し',
        ]);
    }
}
