<?php

namespace Database\Seeders;

use App\Models\{User, MasterProduct, StockTransaction};
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        MasterProduct::factory()->count(50)->create();
    }
}
