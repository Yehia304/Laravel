<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Posts extends Controller
{
    public function create()
    {
        return view('Posts.create');
    }
    public function store()
    {
        dd(request()->all());
    }
}
