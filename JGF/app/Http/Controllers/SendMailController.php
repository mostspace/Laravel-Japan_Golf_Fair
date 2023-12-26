<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SendMail;


class SendMailController extends Controller
{
    public function index()
    {
        $mailData = [
            'title' => 'Send mail from Nicesnippets.com',
            'body' => 'This is for testing email using smtp.'
        ];
         
        Mail::to('mostspace1027@gmail.com')->send(new SendMail($mailData));
           
        dd("Email is sent successfully.");
    }
}
