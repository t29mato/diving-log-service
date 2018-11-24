<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TankTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tank_types')->insert([
            'type' => 'スチール',
        ]);
        DB::table('tank_types')->insert([
            'type' => 'アルミ',
        ]);
        DB::table('tank_types')->insert([
            'type' => 'カーボン',
        ]);
    }
}
