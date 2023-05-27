<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produk>
 */
class ProdukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $produk = [
            'Mie Goreng',
            'Ayam Goreng Kuning Serundeng',
            'Balado Ikan Tongkol',
            'Balado Kentang',
            'brunch',
            'Capcay',
            'Pelecing Kangkung',
            'Perkedel Kentang',
            'Tempe',
        ];

        $randomElement = $produk[array_rand($produk)];

        return [
            'nama' => $randomElement,
            'deskripsi' => $randomElement,
            'harga' => 15000,
            'stok' => 10, // password
            'jenis' => 1,
            'foto' => $randomElement.'.jpg',
        ];
    }
}
