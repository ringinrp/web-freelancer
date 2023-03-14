<?php

namespace Database\Seeders;

use App\Models\DetailUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\OrderStatus;

class OrderStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $order_status = [
            [
                'user_id'          =>  'Approved',
                'created_at'       =>  date("Y-m-d h:i:s"),
                'updated_at'       =>  date("Y-m-d h:i:s"),
            ],
            [
                'user_id'          =>  'Progress',
                'created_at'       =>  date("Y-m-d h:i:s"),
                'updated_at'       =>  date("Y-m-d h:i:s"),
            ],
            [
                'user_id'          =>  'Rejected',
                'created_at'       =>  date("Y-m-d h:i:s"),
                'updated_at'       =>  date("Y-m-d h:i:s"),
            ],
            [
                'user_id'          =>  'Waiting',
                'created_at'       =>  date("Y-m-d h:i:s"),
                'updated_at'       =>  date("Y-m-d h:i:s"),
            ],

        ];

        OrderStatus::insert($order_status);
    }
}