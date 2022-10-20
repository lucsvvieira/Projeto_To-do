<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function index() {

    }

    public function create(Request $request) {

        $categories = Category::all();

        $data['categories'] = $categories;
        
        return view('tasks.create', $data);
        
    }

    public function create_action(Request $request) {
        
        $task = $request->only(['title', 'category_id', 'description', 'due_date']);
        $task['user_id'] = 1;

        $dbTask = Task::create($task);
        return redirect(route('home'));
    }

    public function edit(Request $request) {

        $id = $request->id;
        $task = Task::find($id);
        if (!$task) {
            return redirect(route('home'));
        }

        $categories = Category::all();

        $data['categories'] = $categories;

        $data['task'] = $task;
        
        return view('tasks.edit', $data);

    }

    public function edit_action(Request $request) {
        return 'ok';
    }

    public function delete(Request $request) {
        // Deleta e redireciona de volta para a Home
        return redirect(route('home'));
    }
}
