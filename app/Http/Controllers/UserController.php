<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //Show login form
    public function login(){
        return view('login');
    }
    //Authenticate data from login
    public function authenticate(Request $request){
        
    }
    //Show register form
    public function signup(){
        return view('signup');
    }
    //Create a new user
    public function createuser(Request $request){
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users','email')],
            'password' => 'required|confirmed|min:6'
        ]);
        $user = User::create($formFields);
        return redirect('/');
    }
}
