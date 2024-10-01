<?php

namespace Database\Seeders;

use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        DB::table('units')->insert([
            ['unit_name' => 'Science', 'unit_level' => 1, 'is_active' => true],
            ['unit_name' => 'Mathematics', 'unit_level' => 2, 'is_active' => true],
            ['unit_name' => 'History', 'unit_level' => 1, 'is_active' => true],
        ]);
        DB::table('courses')->insert([
            ['course_code' => 'SCI101', 'curriculum_year' => 2021, 'course_name' => 'Basic Science', 'course_name_en' => 'Basic Science', 'unit_id' => 1, 'is_active' => true, 'ip_address' => null],
            ['course_code' => 'MTH201', 'curriculum_year' => 2022, 'course_name' => 'Advanced Math', 'course_name_en' => 'Advanced Math', 'unit_id' => 2, 'is_active' => true, 'ip_address' => null],
        ]);
        DB::table('students')->insert([
            ['nrp' => '123456789', 'name' => 'John Doe', 'date_of_birth' => '2000-01-01', 'place_of_birth' => 'City A', 'address' => '123 Main St', 'phone_number' => '1234567890', 'nik' => '1234567890123456', 'unit_id' => 1, 'is_active' => true],
            ['nrp' => '987654321', 'name' => 'Jane Doe', 'date_of_birth' => '2001-02-01', 'place_of_birth' => 'City B', 'address' => null, 'phone_number' => '0987654321', 'nik' => '6543210987654321', 'unit_id' => 2, 'is_active' => true],
        ]);
        DB::table('study_plans')->insert([
            ['student_id' => 1, 'course_id' => 1, 'period' => '2021A', 'is_cancel' => false, 'grade' => 85],
            ['student_id' => 2, 'course_id' => 2, 'period' => '2022B', 'is_cancel' => false, 'grade' => 90],
        ]);
    }
}
