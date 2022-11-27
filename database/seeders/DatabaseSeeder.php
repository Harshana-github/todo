<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Review;
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
        // Product::factory(120)->create();
        Review::factory(1000)->create();

        // $this->call([
        //     CategorySeeder::class,
        // ]);
    }
}
