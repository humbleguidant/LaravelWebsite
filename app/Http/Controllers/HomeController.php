<?php
namespace App\Http\Controllers;
/*
Author: Aubrey Nickerson
Date: May 5th, 2020
Program: HomeController.php
Project: Counselling Website Project

This controller handles the backend functionality of the
request appointment page. It checks to see if the user is 
logged in before accessing the page. If not logged in then the 
user is redirected to the welcome page. 
*/
use Illuminate\Http\Request;

// This controller checks if the user has logged in to the page
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
