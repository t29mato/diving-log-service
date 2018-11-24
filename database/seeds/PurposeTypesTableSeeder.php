<?php

use Illuminate\Database\Seeder;

class PurposeTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('purpose_types')->insert([
            'type' => 'ファン',
        ]);
        DB::table('purpose_types')->insert([
            'type' => '講習',
        ]);
        DB::table('purpose_types')->insert([
            'type' => 'ナイト',
        ]);
        DB::table('purpose_types')->insert([
            'type' => 'ドリフト',
        ]);
        DB::table('purpose_types')->insert([
            'type' => 'ディープ',
        ]);
        DB::table('purpose_types')->insert([
            'type' => '洞窟',
        ]);
        DB::table('purpose_types')->insert([
            'type' => 'レック',
        ]);
        DB::table('purpose_types')->insert([
            'type' => '写真',
        ]);
        DB::table('purpose_types')->insert([
            'type' => 'アイス',
        ]);
        DB::table('purpose_types')->insert([
            'type' => '高所',
        ]);
        DB::table('purpose_types')->insert([
            'type' => '川',
        ]);
        DB::table('purpose_types')->insert([
            'type' => 'サーチ',
        ]);
        DB::table('purpose_types')->insert([
            'type' => 'リカバリー',
        ]);
        DB::table('purpose_types')->insert([
            'type' => 'レスキュー',
        ]);
        DB::table('purpose_types')->insert([
            'type' => 'ガイド',
        ]);
    }
}
