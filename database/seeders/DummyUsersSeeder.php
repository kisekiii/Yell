<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name'=>'superadmin',
                'email'=>'superadmin@web.com',
                'password'=>bcrypt('123456'),
                'role'=>'superadmin',

            ],
            [
                'name'=>'admin',
                'email'=>'admin@web.com',
                'password'=>bcrypt('123456'),
                'role'=>'admin',

            ],
            [
                'name'=>'user',
                'email'=>'user@web.com',
                'password'=>bcrypt('123456'),
                'role'=>'user',

            ]
        ];

        foreach ($userData as $key => $val){
           User::create($val);
        }
    }
}
