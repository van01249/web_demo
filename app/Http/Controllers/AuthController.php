<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function pageRegister(){
        return view('register');
    }

    public function login(Request $req){

    }
}