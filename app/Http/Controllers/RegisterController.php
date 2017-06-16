<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\WelcomeAgain;
use Auth;

class RegisterController extends Controller
{
    public function index()
    {
    	return view('auth.register');
    }

}
