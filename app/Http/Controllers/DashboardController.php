<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function layout()
    {
    	return view('layouts.layout_dashbord');
    }

    public function user()

    {
    	return view('dashboard.user');
    }

    public function home()
    {
    	return view('dashboard.home');
    }

    public function edit($id, Request $request)
    {
        $user = User::firndOrFail($id);

        $user->name = $request->get('name');

        $user->email = $request->get('email');

        $user->password = $request->get('password');

        $user->save();

        return \Redirect::route('dashboard.user', [$user->id])->with('message', 'User has been updated.');
    }
}
