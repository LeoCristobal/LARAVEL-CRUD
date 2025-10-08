<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginUserController extends Controller
{


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attr = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (! Auth::attempt($attr)){
            throw ValidationException::withMessages([
                'email' => 'Sorry. Those credentials do not match'
            ]);
        }

        $request->session()->regenerate();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        Auth::logout();

        return redirect('/login');
    }
}
