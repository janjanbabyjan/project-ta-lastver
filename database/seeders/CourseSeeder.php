<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    public function run()
    {
        $courses = [
            [
                'course_code' => 'SC312003',
                'course_name_thai' => 'ระบบจัดการฐานข้อมูลและการออกแบบฐานข้อมูล',
                'course_name_english' => 'Database Management System and Database Design',
                'credits' => 3,
                'year' => '2/2567',
                'category_id' => 'C',
                'branch_id' => '1',
                'professor_id' => 101,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_code' => 'SC313004',
                'course_name_thai' => 'วิศวกรรมซอฟต์แวร์',
                'course_name_english' => 'Software Engineering',
                'credits' => 3,
                'year' => '2/2567',
                'category_id' => 'C',
                'branch_id' => '1',
                'professor_id' => 102,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more data if needed
        ];
        
        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}
