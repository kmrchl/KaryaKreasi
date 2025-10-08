<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produk;


class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Produk::factory(10)->create();
    }
}
