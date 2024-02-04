<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OlSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('olsubjects')->insert([
            ['ol_subject_title' => 'Mathematics', 'subject_id' => 1],
            ['ol_subject_title' => 'English', 'subject_id' => 1],
            ['ol_subject_title' => 'Science', 'subject_id' => 2],
            ['ol_subject_title' => 'ICT', 'subject_id' => 3],
            ['ol_subject_title' => 'English', 'subject_id' => 3],
            ['ol_subject_title' => 'Mathematics', 'subject_id' => 4],
            ['ol_subject_title' => 'Science', 'subject_id' => 5],
            ['ol_subject_title' => 'English', 'subject_id' => 5],
            ['ol_subject_title' => 'Science', 'subject_id' => 6],
            ['ol_subject_title' => 'English', 'subject_id' => 6],
            ['ol_subject_title' => 'Mathematics', 'subject_id' => 7],
            ['ol_subject_title' => 'English', 'subject_id' => 7],
            ['ol_subject_title' => 'Commerce', 'subject_id' => 8],
            ['ol_subject_title' => 'Commerce', 'subject_id' => 9],
        ]);
    }
}
