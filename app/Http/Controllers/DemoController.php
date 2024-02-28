<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index()
    {
        return view('demo');
    }

    public function about()
    {
        return view('welcome');
    }

    public function register()
    {
        return view('register');
    }

    public function action(Request $request)
    {
        echo "<pre>";
        print_r($request->input());
        echo "</pre>";
    }
}
