<?php

namespace App\Http\Controllers;

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

        $this->validate($request, [
            'schedule' => 'required',
            'phone' => 'required',
            'message' => 'required'
        ]);
        
        $data = array(
            'schedule' => $request->schedule,
            'phone' => $request->phone,
            'message' => $request->message
        );

        Mail::to('counseling4life.ca@gmail.com')->send(new RequestAppointment($user, $data));
        return back()->with('success', 'Your request has been sent and will be reviewed. You will be contacted by email or phone as soon as possible.');
    }
}
