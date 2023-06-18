<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthinticationController extends Controller
{
    public function login()
    {


        
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                ->withSuccess('Signed in');
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }




    public function register()
    {


           User::create([


            
           ])
   


    }


    public function logout()
    {


        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
