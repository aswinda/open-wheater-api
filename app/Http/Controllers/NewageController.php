<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewageController extends Controller
{
    public function index()
    {
    	return view('index');
    }

    public function layouts()
    {
    	return view('layouts.layout');
    }
}
