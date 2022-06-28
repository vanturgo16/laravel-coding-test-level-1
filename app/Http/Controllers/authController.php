<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class authController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function signup(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'user_name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'user_type' => 'required',
        ]);

        $users=User::create([
            'name' => $request->user_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'type' => $request->user_type,
        ]);

        return redirect('login')->with('status','Success Create User');
    }

    public function postLogin(Request $request)
    {
         //dd($request->all());
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $email=$request->email;
        $password=$request->password;
        $credentials = [
            'email' => $email,
            'password' => $password
        ];

        $dologin=Auth::attempt($credentials);
        if($dologin){
                return redirect('/events');
        }
        else{
            return redirect('login')->with('status','Wrong Email or Password');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login')->with('status','Success Logout');
    }
}
