<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    //direct register page
    public function registerPage()
    {
        return view('auth.register');
    }

    //create register account
    public function createUser(Request $request)
    {
        Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|max:30|unique:users,email',
            'phone' => 'required|min:9',
            'address' => 'required',
            'password' => 'required|min:6|max:20|regex:/^(?=.*?[A-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/',
            'passwordConfirmation' => 'required|min:6|max:20|same:password',
        ])->validate();
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'password'=> Hash::make($request->passwordConfirmation),
        ];

        $user=User::create($data);
        // after register user will auto login
        auth()->login($user);
        return redirect()->route('auth#home');
    }

    public function home(){
        return view('home');
    }

    public function logout(){
        auth()->logout();
        return redirect()->route('mainPage');
    }

    public function mainPage(){
        return view('welcome');
    }
}
