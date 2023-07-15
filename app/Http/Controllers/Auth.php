<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class Auth extends Controller
{
    function login() : View {
        return view('Auth.login');
    }
    function authentication() {

    }
}
