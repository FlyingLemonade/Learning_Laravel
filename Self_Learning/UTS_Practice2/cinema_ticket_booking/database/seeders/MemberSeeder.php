<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('members')->insert([
            [
                'nama' => 'John Doe',
                'tanggal_lahir' => '1990-01-01'
            ],
            [
                'nama' => 'Jane Smith',
                'tanggal_lahir' => '1985-05-20'
            ],
            [
                'nama' => 'Alice Brown',
                'tanggal_lahir' => '1992-11-15'
            ]
        ]);
    }
}
