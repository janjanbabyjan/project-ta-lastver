<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateusersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = [
            [
                "name"=> "Admin",
                'email'=> 'admin@admin.com',
                'type' => '1',
                'password' => bcrypt('1234'),
            ],
            [
                'name'=> 'User',
                'email'=> 'user@user.com',
                'type' => '0',
                'password' => bcrypt('1234'),
            ],
            [
                'name'=> 'Teacher',
                'email'=> 'teacher@teacher.com',
                'type' => '2',
                'password' => bcrypt('1234'),
            ]
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
