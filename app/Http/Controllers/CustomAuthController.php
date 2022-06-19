<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CustomAuthController extends Controller
{
    //

    public function login()
    {
        $user = User::find(2);

        Auth::login($user);

        return redirect('/services');
    }

    public function CustomLogin($id)
    {
        // $user = User::find($id);
        // if(! $user)
        // {
        //     Auth::logout();
        //     return redirect('login');
        // }

        $user = User::findOrFail($id);

        Auth::login($user);

        return redirect('/services');
    }
}
