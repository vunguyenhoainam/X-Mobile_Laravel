<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
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
        // \App\Models\User::factory(10)->create();
        // Category::factory(10)->create();
        User::factory(20)->create();
        // Product::factory(20)->create();
        // $this->call(RoleDatabaseSeeder::class);
    }
}
