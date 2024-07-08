<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index() {
        $todos = Todo::all();
        return response() -> json([
            'data' => $todos
        ], 200);
    }

    public function store(Request $request) {
        $todo = new Todo();
        $todo->title = ($request->title);
        $todo->completed = 0;
        $todo->save();
        return response()->json([
            'data' => $todo
        ], 201);
    }

    public function update(Todo $todo) {
        $todo->completed = 1;
        $todo->save();
        return response()->json([
            'data' => $todo
        ], 200);
    }

    public function delete(Todo $todo) {
        $todo->delete();
        return response()->json([
            'message' => 'deleted success'
        ], 200);
    }
}
