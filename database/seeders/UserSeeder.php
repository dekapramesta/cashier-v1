<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            [
                'name' => 'admin',
                'level' => 1,
                'email'          => 'admin@gmail.com',
                'password'          => Hash::make('admin'),
                'status_user'       => 1
            ],
            [
                'name' => 'deka',
                'level' => 2,
                'email'          => 'deka@gmail.com',
                'password'          => Hash::make('dekapra77'),
                'status_user'       => 1
            ],

        ];
        foreach ($data as $dt) {
            $user = User::create($dt);
            $user->save();
        }
    }
}
