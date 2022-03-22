<?php

namespace App\Http\Controllers;

use Illuminate;


class TodoController extends Controller
{
    public function index()
    {
        return view('todo.index');
    }
}
