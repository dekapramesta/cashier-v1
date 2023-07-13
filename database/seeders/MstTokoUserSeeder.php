<?php

namespace Database\Seeders;

use App\Models\mst_toko_user;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MstTokoUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            [
                'fk_user' => 2,
                'fk_toko' => 1,

            ],


        ];
        foreach ($data as $dt) {
            $user = mst_toko_user::create($dt);
            $user->save();
        }
    }
}
