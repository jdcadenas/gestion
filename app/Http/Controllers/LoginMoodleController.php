<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class LoginMoodleController extends Controller
{
    /**
     * Handle an authentication attempt.
     */
    public function authenticate(Request $request): RedirectResponse
    {
       dd($request);
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);
 
        $usertoken = Http::get('https://plataforma-arrow.online/login/token.php?', [
            'service' => 'moodle_mobile_app',
            'username'=> $request-> email,
            'password'=> $request-> password,
        ])->json();

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('dashboard');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}