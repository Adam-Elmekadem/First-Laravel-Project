<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller {

    public function login(Request $request) {
        // Validate the input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6', // Changed to min:6 to match your test password
        ]);

        $email = $request->input('email');
        $password = $request->input('password');
        
        // Check credentials
        if($email === 'adam@gmail.com' && $password === 'adam123') {
            // good login
            session(['user_email' => $email]); // Store user in session
            return redirect()->route('home')->with('success', 'Login successful!');
        } else {
            
            //faild login
            return redirect()->back()
                ->withErrors(['login' => 'Invalid email or password.'])
                ->withInput($request->only('email'));
        }
    }
    
    public function showLoginForm() {
        return view('login');
    }
    
    public function logout() {
        session()->forget('user_email');
        return redirect()->route('login')->with('success', 'Logged out successfully!');
    }
}