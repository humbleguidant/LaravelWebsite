<?php
namespace App\Mail;

/*
Author: Aubrey Nickerson
Date: May 5th, 2020
Program: RequestAppointment.php
Project: Counselling Website Project

This php object handles the email functionality when
a user requests an appointment. 
*/
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Auth;

class RequestAppointment extends Mailable
{
    use Queueable, SerializesModels;
    public $user;
    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, $data)
    {
        $this->user = $user;
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    // Send an email to the user found in the database with the
    // appointments form located in /resources/views/email/appointments.blade.php. 
    // Pass the data to the form. 
    public function build()
    {
        return $this->from($this->user->email)
                    ->subject('New Client Request')
                    ->view('emails.appointment')
                    ->with('data', $this->data);
                    
    }
}
