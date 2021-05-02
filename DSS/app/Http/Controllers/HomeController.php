<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth'); descomentar para activar la redireccion desde home a "Authenticate::class" cuando no esta logueado el usuario
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::check() && Auth::user()->role=='admin')
            return view('layouts.admin');
        else
            return view('layouts.user');
    }
}
