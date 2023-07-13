<?php

namespace Database\Seeders;

use App\Models\Toko;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TokoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            [
                'nama_toko' => 'dekashop'
            ],

        ];
        foreach ($data as $dt) {
            $user = Toko::create($dt);
            $user->save();
        }
    }
}
