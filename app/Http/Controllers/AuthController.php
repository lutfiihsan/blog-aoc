<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login() {
        return view('admin.sign-in');
    }

    public function register() {
        return view('admin.sign-up');
    }
}
