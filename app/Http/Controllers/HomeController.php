<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function test() {
        //return  \App\User::find(1)->profile;
        return view('test');

        ////dd(\Route::getRoutes()->getByAction());
        //
        //$routes = \Route::getRoutes()->get();
        //dd($routes);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
}
