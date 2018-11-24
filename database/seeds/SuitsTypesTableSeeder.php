<?php

use Illuminate\Database\Seeder;

class SuitsTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suits_types')->insert([
            'type' => 'ワンピース',
        ]);
        DB::table('suits_types')->insert([
            'type' => 'セミドライスーツ',
        ]);
        DB::table('suits_types')->insert([
            'type' => 'ドライスーツ',
        ]);
        DB::table('suits_types')->insert([
            'type' => '2ピース',
        ]);
        DB::table('suits_types')->insert([
            'type' => 'ロングジョン',
        ]);
        DB::table('suits_types')->insert([
            'type' => 'シーガル',
        ]);
        DB::table('suits_types')->insert([
            'type' => 'スプリング',
        ]);
        DB::table('suits_types')->insert([
            'type' => '水着',
        ]);
    }
}
