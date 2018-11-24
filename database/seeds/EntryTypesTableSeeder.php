<?php

use Illuminate\Database\Seeder;

class EntryTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('entry_types')->insert([
            'type' => 'ビーチ',
        ]);
        DB::table('entry_types')->insert([
            'type' => 'ボート',
        ]);
        DB::table('entry_types')->insert([
            'type' => '桟橋',
        ]);
    }
}
