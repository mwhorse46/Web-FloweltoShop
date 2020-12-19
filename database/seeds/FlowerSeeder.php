<?php

use Illuminate\Database\Seeder;

class FlowerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('flowers')->insert([
            'name' => 'Aurora Rose',
            'price' => 1,
            'description' => 'aurora-rose',
            'image' => 'random.jpg',
            'category_id' => 1,
        ]);

        DB::table('flowers')->insert([
            'name' => 'Blue Ocean Rose',
            'price' => 2,
            'description' => 'blue-ocean-rose',
            'image' => 'random.jpg',
            'category_id' => 2,
        ]);

        DB::table('flowers')->insert([
            'name' => 'Angels Rose',
            'price' => 3,
            'description' => 'angels-rose',
            'image' => 'random.jpg',
            'category_id' => 1,
        ]);

        DB::table('flowers')->insert([
            'name' => 'Lovey Dovey',
            'price' => 4,
            'description' => 'lovey-dovey',
            'image' => 'random.jpg',
            'category_id' => 3,
        ]);
    }
}
