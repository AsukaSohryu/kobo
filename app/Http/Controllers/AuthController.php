<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Symfony\Contracts\Service\Attribute\Required;

class AuthController extends Controller
{
    public function login(){

        return view('internal.login',[
            'pageTitle'=>'Login']);
    }

    public function loginPost(Request $request){

        $credentials = $request->validate([

            'name'=>'required',
            'password'=> 'required',
        ]);
        // dd($credentials);

        if(Auth::attempt(['name' => $credentials['name'], 'password' => $credentials['password']])){
            $request->session()->regenerate();
            return redirect()->intended(route('dashboard'));
        }

        return back()->with('loginError', 'Username atau Password Salah');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}

