<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;
use App\Mail\RegistrationComplete;

class RegistrationController extends Controller
{
    public function submit(Request $request){
      $this->validate($request,[
        'name'=> 'required',
        'email'=> 'required',
        'role'=> 'required|in:Follower,Leader',
        'group'=> 'required|in:Solo,Lindy,Shag'
      ]);

      // Create New Registration
      $registration = new Registration;
      $registration->name = $request->input('name');
      $registration->email = $request->input('email');
      $registration->partner = $request->input('partner');
      $registration->role = $request->input('role');
      $registration->group = $request->input('group');
      $registration->message = $request->input('message')?: ' ';

      //Save Registration
      $registration->save();

      //Sanding Email
      \Mail::to($registration)->send(new RegistrationComplete);

      //Redirect
      return redirect('/')->with('success','Registration Sent');
    }

    public function getRegistrations(){
      $registration = Registration::all();

      return view('admin')->with('registration', $registration);
    }
}
