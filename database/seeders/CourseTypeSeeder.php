<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CourseType; // Import the CourseType model

class CourseTypeSeeder extends Seeder
{
    public function run()
    {
        $courseTypes = [
            [
                'category_id' => 'C',
                'category_name' => 'เลคเชอร์',
            ],
            [
                'category_id' => 'L',
                'category_name' => 'แล็บ',
            ],
        ];

        foreach ($courseTypes as $courseType) {
            CourseType::create($courseType);
        }
    }
}
