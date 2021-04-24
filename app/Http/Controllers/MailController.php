<?php

namespace App\Http\Controllers;

use App\Mail\SendingMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(Request $request){
        $details = [
            'email'=>$request->email,
        ];
        Mail::to('190103148@stu.sdu.edu.kz')->send(new SendingMail($details));
       return back()->with('msg', 'Your application has been sent successfully!');
    }
}
