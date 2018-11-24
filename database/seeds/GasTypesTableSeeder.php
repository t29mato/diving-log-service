<?php

use Illuminate\Database\Seeder;

class GasTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gas_types')->insert([
            'type' => '空気',
        ]);
        DB::table('gas_types')->insert([
            'type' => 'ナイトロックス',
        ]);
        DB::table('gas_types')->insert([
            'type' => 'ヘリオックス',
        ]);
        DB::table('gas_types')->insert([
            'type' => 'トライミックス',
        ]);
    }
}
