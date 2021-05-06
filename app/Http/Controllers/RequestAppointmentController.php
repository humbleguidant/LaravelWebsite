<?php
namespace App\Http\Controllers;
/*
Author: Aubrey Nickerson
Date: May 5th, 2020
Program: RequestAppointmentController.php
Project: Counselling Website Project

This controller handles the backend functionality of the
request appointment page. It checks to see if the user is 
logged in before accessing the page. If not logged in then the 
user is redirected to the welcome page. It then checks to see
if all of the required fields are filled. It adds the field values
to an array and sends to the RequestAppointment Mail object to handle.
RequestAppointment is located in /app/Http/Mail.
*/
use App\Mail\RequestAppointment;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class RequestAppointmentController extends Controller
{
    public function sendthemail(Request $request)
    {
        $user = Auth::user();
        
        // Valudate that all the fields are filled.
        $this->validate($request, [
            'schedule' => 'required',
            'phone' => 'required',
            'message' => 'required'
        ]);
        
        // Add field values to array
        $data = array(
            'schedule' => $request->schedule,
            'phone' => $request->phone,
            'message' => $request->message
        );

        // Pass array to RequestAppointment object located in /app/Http/Mail.
        Mail::to('counseling4life.ca@gmail.com')->send(new RequestAppointment($user, $data));
        return back()->with('success', 'Your request has been sent and will be reviewed. You will be contacted by email or phone as soon as possible.');
    }
}
