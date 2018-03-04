<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * [getHome description]
     * @return [type] [description]
     */
    public function getHome(){

        return view('home');
    }

}