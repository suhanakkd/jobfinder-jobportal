<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
        try {
        if (Auth::attempt($credentials)) {
            return 'ok';
            $request->session()->regenerate();

            return redirect('/rrr')->intended();
        }
    } catch (\Exception $e) {
        return $e->getMessage();
    }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}