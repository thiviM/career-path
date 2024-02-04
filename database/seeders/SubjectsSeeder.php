<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert([
            ['subject_title' => 'Engineering Technology', 'stream_id' => 1],
            ['subject_title' => 'Science for Technology', 'stream_id' => 1],
            ['subject_title' => 'ICT', 'stream_id' => 1],
            ['subject_title' => 'Combined Maths', 'stream_id' => 2],
            ['subject_title' => 'Physics', 'stream_id' => 2],
            ['subject_title' => 'Chemistry', 'stream_id' => 2],
            ['subject_title' => 'Accountancy', 'stream_id' => 3],
            ['subject_title' => 'Economics', 'stream_id' => 3],
            ['subject_title' => 'Business Studies', 'stream_id' => 3],
        ]);
    }
}
