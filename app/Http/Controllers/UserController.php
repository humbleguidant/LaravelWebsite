<?php
namespace App\Http\Controllers;
/*
Author: Aubrey Nickerson
Date: May 5th, 2020
Program: UserController.php
Project: Counselling Website Project

This controller grabs the user data associated 
with the user who just logged in and displays the first name
and last name on the navigation bar. The user is then redirected
to the request appointment page. 
*/
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($user)
    {
        // Select query on user table
        $user = User::find($user);
        
        // Return the request appointment page. 
        return view('home', [
            'user' => $user,
        ]);
    }
}
