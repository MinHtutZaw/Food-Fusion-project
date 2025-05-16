<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }
    public function store()
    {
        $formData = request()->validate([

            'firstname' => ['required', 'max:255', 'min:3'],
            'lastname' => ['required', 'max:255', 'min:3'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8']
        ], [
            'email.required' => 'Please enter your email address.',
            'password.min' => 'Password should be at least 8 characters with a captial and small letter with special character.',
            'password.confirmed' => 'Password confirmation does not match.',
        ]);

        $formData['username'] = Str::slug($formData['firstname']);
        User::create($formData);
        return redirect('/login')->with('success', 'Account is created successfully. Please log in.');
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/')->with('success', 'Good bye');
    }
    public function login()
    {
        return view('auth.login');
    }


    public function post_login()
    {
     
         $formData=request()->validate([
            'email'=>['required','email','max:255',Rule::exists('users', 'email')],
            'password'=>['required','min:8','max:255']
        ], [
            'email.required'=>'We need your email address.',
            'password.required' => 'Please enter your password.',
            'password.min'=>'Password should be more than 8 characters.'
        ]);
        
        //if user credentials correct -> redirect home
        if (auth()->attempt($formData)) {
            return redirect('/')->with('success', 'Welcome back');
        } else {
            //if user credentials fail -> redirect back to form with error
            return redirect()->back()->withErrors([
                'email'=>'User Credentials Wrong'
            ]);
        }

       

      
    }
}
