<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function sendMail(Request $request){

   
      \Mail::send(['text'=>'mail'], $request, function($message) {
         $message->to('havvtom@gmail.com', 'Tutorials Point')->subject
            ('Laravel Basic Testing Mail');
         $message->from($request->email,$request->name);
      });
      return "Basic Email Sent. Check your inbox.";

    }
}
