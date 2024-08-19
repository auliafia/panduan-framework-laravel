<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create(['name' => 'Product 1', 'price' => 100.00, 'stock' => 10]);
        Product::create(['name' => 'Product 2', 'price' => 200.00, 'stock' => 5]);
        Product::create(['name' => 'Product 3', 'price' => 300.00, 'stock' => 0]);
    }
}
