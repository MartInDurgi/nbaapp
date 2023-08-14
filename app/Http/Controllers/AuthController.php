<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Mail\VerificationMail;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('notAuth')->except(['logout', 'validation']);
    }

    public function showRegisterPage()
    {
        return view('pages.auth.register');
    }
    public function showLoginPage()
    {
        return view('pages.auth.login');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2|max:32|string',
            'email' => 'required|unique:users,email',
            'password' => 'required|string|min:5|max:255|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $mailData = $user;
        Mail::to($user->email)->send(new VerificationMail($mailData));

        //$this->login($request);
        return redirect('/login')->with('status', 'Account created');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (!Auth::attempt($credentials)) {
            return redirect('/login')->withErrors('Invalid credentials!');
        }

        if (Auth::user()->email_verified_at == null) {
            $this->logout();
            return redirect('/login')->withErrors('Email not verefied!');
        }

        return redirect('/');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect('/login')->with('status', 'logged out');
    }
    public function validation(string $id)
    {
        $user = User::find($id);
        $user->email_verified_at = now();
        $user->save();
        return redirect('/login')->with('status', 'email verified please log in');
    }
}
