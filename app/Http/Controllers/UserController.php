<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home() {
        return view('User.home');
    }

    public function checkout() {
        return view('User.checkout');
    }

}