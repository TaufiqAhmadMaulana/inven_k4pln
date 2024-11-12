<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login.login', [
            'title' => 'Login',
        ]);
    }

    public function authenticate(Request $request){
        $credentials = $request ->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        Log::info('Credentials:', $credentials);
        if(Auth::attempt($credentials)){
            $request -> session() -> regenerate();
            return redirect() -> intended('/dashboard');
        }
        Log::warning('Login failed for user: ' . $credentials['username']);
        return back()->with('loginError', 'Login Failed!');
    }

    public function logout()
    {
        Auth::logout();
        request() -> session() -> invalidate();
        request() -> session() -> regenerateToken();
        return redirect('/login');
    }

}
