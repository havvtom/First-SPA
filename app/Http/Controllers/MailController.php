<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function sendMail(Request $request){

   
      $this->validate($request, [
        'name' => 'required',
        'phone' => 'required',
        'email' => 'required|email',
        'message' => 'required'
        ]);

      \Mail::send('email',
       array(
           'name' => $request->get('name'),
           'email' => $request->get('email'),
           'phone' => $request->phone,
           'user_message' => $request->get('message')
       ), function($message)
   {
       
       $message->to('havvtom@gmail.com', 'Admin')->subject('Business');
   });
    return back()->with('success', 'Thanks for contacting us!'); 


    }
}
