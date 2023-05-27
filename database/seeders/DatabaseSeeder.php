<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\Produk::factory(10)->create();

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

        foreach ($produk as $key => $value) {
            \App\Models\Produk::factory()->create([
                'nama' => $value,
                'deskripsi' => $value,
                'harga' => 15000,
                'stok' => 10, // password
                'jenis' => 1,
                'foto' => $value.'.jpg',
            ]);
        }

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
