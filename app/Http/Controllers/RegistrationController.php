<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegistrationController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'username' => 'required|unique:login,username',
            'password' => 'required',
        ]);

        $fname = $request->input('fname');
        $lname = $request->input('lname');
        $username = $request->input('username');
        $password = md5($request->input('password'));

        // Insert the user data into the database
        DB::table('login')->insert([
            'fname' => $fname,
            'lname' => $lname,
            'username' => $username,
            'password' => $password,
        ]);

        // Registration successful message
        return redirect('/')->with('success', 'Registration successful! Redirecting to index page...');
    }
}
