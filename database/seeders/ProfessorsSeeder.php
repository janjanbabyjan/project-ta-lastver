<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Professors;

class ProfessorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $professors = [
            [
                'professor_id' => 101,
                'professor_name' => 'ผศ.ดร.พุธษดี ศิริแสงตระกูล',
            ],
            [
                'professor_id' => 102,
                'professor_name' => 'ผศ.ดร.ชิตสุธา สุ่มเล็ก',
            ],
        ];

        foreach ($professors as $professor) {
            Professors::create($professor);
        }
    }
}
