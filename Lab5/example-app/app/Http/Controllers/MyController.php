<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index() {
        return 'Welcome to new page';
    }

    public function show($id) {
        return 'Welcome to new page, ' .$id;
    }

    public function show_form() {
        return view('show');
    }

    public function store(Request $request) {
        $name = $request->input('name');
        $message = $request->input('message');
        return view('feedback', [
            'name' => $name,
            'message' => $message,
        ]);
    }
}
