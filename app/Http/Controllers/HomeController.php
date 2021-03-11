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
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function getAboutUs()
    {
        return view('layouts.aboutUs');
    }
    public function getEvent()
    {
        return view('layouts.events');
    }
    public function getContactUs()
    {
        return view('layouts.contactUs');
    }
}
