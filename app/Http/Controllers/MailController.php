<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'inquiry' => 'required',
            't_c' => 'accepted'
        ]);
        $admin='office@idenbrid.com';
        Mail::send('email.contact-us', ['data' => $request->all()], function($message) use($admin){
            $message->to($admin);
            $message->subject('誰かが価格の見積もりを尋ねた');
        });
    }
}
