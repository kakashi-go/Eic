<?php

use Illuminate\Database\Seeder;

class SportsCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sports_category = [
            ['code' => 1, 'name' => '野球'],
            ['code' => 2, 'name' => 'サッカー'],
            ['code' => 3, 'name' => 'テニス'],
            ['code' => 4, 'name' => 'ランニング'],
            ['code' => 5, 'name' => '自転車'],
        ];

        DB::table('sports_category')->insert($sports_category);

    }
}
