<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Branch; // Import the Branch model

class BranchSeeder extends Seeder
{
    public function run()
    {
        $branches = [
            [
                'branch_id' => '1',
                'branch_name' => 'วิทยาการคอมพิวเตอร์',
                'branch_type' => 'ปกติ',
            ],
            [
                'branch_id' => '10',
                'branch_name' => 'ความมั่นคงปลอดภัยไซเบอร์',
                'branch_type' => 'พิเศษ',
            ],
            [
                'branch_id' => '2',
                'branch_name' => 'วิทยาการคอมพิวเตอร์',
                'branch_type' => 'พิเศษ',
            ],
            [
                'branch_id' => '3',
                'branch_name' => 'เทคโนโลยีสารสนเทศ',
                'branch_type' => 'ปกติ',
            ],
            [
                'branch_id' => '4',
                'branch_name' => 'เทคโนโลยีสารสนเทศ',
                'branch_type' => 'พิเศษ',
            ],
            [
                'branch_id' => '5',
                'branch_name' => 'ภูมิสารสนเทศศาสตร์',
                'branch_type' => 'ปกติ',
            ],
            [
                'branch_id' => '6',
                'branch_name' => 'ภูมิสารสนเทศศาสตร์',
                'branch_type' => 'พิเศษ',
            ],
            [
                'branch_id' => '7',
                'branch_name' => 'ปัญญาประดิษฐ์',
                'branch_type' => 'ปกติ',
            ],
            [
                'branch_id' => '8',
                'branch_name' => 'ปัญญาประดิษฐ์',
                'branch_type' => 'พิเศษ',
            ],
            [
                'branch_id' => '9',
                'branch_name' => 'ความมั่นคงปลอดภัยไซเบอร์',
                'branch_type' => 'ปกติ',
            ],
        ];

        foreach ($branches as $branch) {
            Branch::create($branch);
        }
    }
}
