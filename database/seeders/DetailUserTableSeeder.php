<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\DetailUser;

class DetailUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $detail_user = [
            [
                'user_id'          => 1,
                'photo'            => '',
                'role'             =>  'Website Developer',
                'contact_number'   =>  '',
                'biography'        =>  '',
                'created_at'       =>  date("Y-m-d h:i:s"),
                'updated_at'       =>  date("Y-m-d h:i:s"),
            ],
            [
                'user_id'          => 2,
                'photo'            => '',
                'role'             =>  'Front End Developer',
                'contact_number'   =>  '',
                'biography'        =>  '',
                'created_at'       =>  date("Y-m-d h:i:s"),
                'updated_at'       =>  date("Y-m-d h:i:s"),
            ],
        ];

        DetailUser::insert($detail_user);
    }
}
