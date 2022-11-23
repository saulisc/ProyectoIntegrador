<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorVistas extends Controller
{
    public function showHome(){
        return view('home');
    }
    public function showLogin(){
        return view('login');
    }
    public function restartpassword(){
        return view('restartpassword');
    }
    public function registeruser(){
        return view('registeruser');
    }

    public function cart(){
        return view('cart');
    }
    public function inventario(){
        return view('inventario');
    }
    public function store(){
        return view('store');
    }
}
