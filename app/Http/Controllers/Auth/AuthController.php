<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        $data = "Novan";
        return view('auth.login', ['data' => $data]);
    }

    public function register()
    {
        return view('auth.register');
    }
}
