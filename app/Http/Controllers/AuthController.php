<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function register(){
        var_dump($req); die;
        return view('register');
    }

    public function login(Request $req){

    }
}