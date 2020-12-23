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
            'name' => 'Bridal',
            'image' => 'public/images/1603369913-bridal.jpg',
        ]);

        DB::table('flower_categories')->insert([
            'name' => 'Christmas',
            'image' => 'public/images/1603369913-christmas.jpg',
        ]);

        DB::table('flower_categories')->insert([
            'name' => 'Hamper',
            'image' => 'public/images/1603369913-hamper.jpg',
        ]);
    }
}
