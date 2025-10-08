<?php

namespace Database\Factories;
use App\Models\Produk;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProdukFactory extends Factory
{
    protected $model = Produk::class;

public function definition(): array
{
    return [
        'produk' => $this->faker->word(),
        'deskripsi' => $this->faker->sentence(),
        'harga' => $this->faker->randomFloat(2, 50000, 250000),
        'gambar' => 'https://picsum.photos/seed/' . $this->faker->unique()->numberBetween(1, 1000) . '/600/400',

    ];
}
}
