<?php

use Illuminate\Database\Seeder;

class FlowerCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('flower_categories')->insert([
            'name' => 'Hand Bouquet (gift)',
            'image' => 'random.jpg',
        ]);

        DB::table('flower_categories')->insert([
            'name' => 'Wedding Bouquet',
            'image' => 'random.jpg',
        ]);

        DB::table('flower_categories')->insert([
            'name' => 'Table Arrangement',
            'image' => 'random.jpg',
        ]);

        DB::table('flower_categories')->insert([
            'name' => 'Couple Bouquet',
            'image' => 'random.jpg',
        ]);
    }
}
