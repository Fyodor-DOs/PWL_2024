<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello()
    {
        return 'Hello World';
    }

    // public function greeting()
    // {
    //     return view('blog.hello', ['name' => 'Fathir Syafaat']);
    // }

    public function greeting()
    {
        return view('blog.hello')
            ->with('name', 'Fathir')
            ->with('occupation', 'Chef');
    }
}
