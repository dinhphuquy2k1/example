<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\categories;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // categories::factory(\App\Models\categories::class, 1000)->create();
        categories::factory()->count(50)->create();
    }
}
