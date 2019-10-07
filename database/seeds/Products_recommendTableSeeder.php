<?php

use Illuminate\Database\Seeder;

class Products_recommendTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('products_recommend')->insert([
            'title' => Str::random(10),
            'detail' => Str::random(10),
        ]);


    }
}
