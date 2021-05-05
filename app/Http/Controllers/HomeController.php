
<?php
namespace App\Http\Controllers;
/*
Author: Aubrey Nickerson
Date: May 5th, 2020
Program: HomeController.php
Project: Counselling Website Project
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
