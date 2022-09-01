<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Task::create([
            'title' => 'Task de exemplo',
            'description' => 'Apenas exemplo',
            'due_date' => '2022-09-01 13:41:00',
            'user_id' => 1,
            'category_id' => 1 
        ]);
    }
}
