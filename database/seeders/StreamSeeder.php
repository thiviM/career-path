<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StreamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('streams')->insert([
            ['stream_title' => 'Technology', 'job_id' => 1],
            ['stream_title' => 'Combined Maths', 'job_id' => 1],
            ['stream_title' => 'Commerce', 'job_id' => 2],
        ]);
    }
}
