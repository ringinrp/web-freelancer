<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name'              => 'Jhonny',
                'email'             => 'jhonny@gmail.com',
                'password'          =>  Hash::make('admin123'),
                'remember_token'    =>  NULL,
                'created_at'        =>  date('Y-m-d h:i:s'),
                'updated_at'        =>  date('Y-m-d h:i:s'),
            ],
            [
                'name'              => 'Terry',
                'email'             => 'terry@gmail.com',
                'password'          =>  Hash::make('admin123'),
                'remember_token'    =>  NULL,
                'created_at'        =>  date('Y-m-d h:i:s'),
                'updated_at'        =>  date('Y-m-d h:i:s'),
            ],
        ];

        User::insert($users);
    }
}
