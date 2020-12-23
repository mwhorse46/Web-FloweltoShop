<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);

        $this->call(FlowerCategorySeeder::class);
        $this->call(FlowerSeeder::class);
        $this->call(TransactionSeeder::class);
    }
}
