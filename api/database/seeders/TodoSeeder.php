<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $todos = [
            ['title' => 'Muscle training', 'completed' => 0],
            ['title' => 'Running', 'completed' => 1],
            ['title' => 'Learning React', 'completed' => 0],
            ['title' => 'Learning Vue', 'completed' => 1],
            ['title' => 'Swimming', 'completed' => 0],
        ];
        foreach ($todos as $todo) {
            DB::table('todos')->insert([
                'title' => $todo['title'],
                'completed' => $todo['completed'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
