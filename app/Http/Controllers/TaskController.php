<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function index() {

    }

    public function create(Request $request) {
        
        return view('tasks.create');
        
    }

    public function edit(Request $request) {
        
        return view('tasks.edit');

    }

    public function delete(Request $request) {
        // Deleta e redireciona de volta para a Home
        return redirect(route('home'));
    }
}
