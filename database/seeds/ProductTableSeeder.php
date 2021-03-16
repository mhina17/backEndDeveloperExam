<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' =>  "Guitar",
            'category' => "Telecaster",
            'description' => "Light Green Guitar",
            'photos' => "lightgreen.jpg",
            'date_and_time' => now(),
        ]);
        factory('App\Product', 2)->create();
    }
}
