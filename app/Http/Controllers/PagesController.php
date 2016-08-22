<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

  public function getIndex(){
      # process variable data or params
      # talk to the model
      # receive from the model
      # compile or process data from the model if needed
      # pass that data to the correct view
      return view('pages.welcome');
  }

  public function getAbout(){
      $first = 'Miguel';
      $last = 'De Jesus';

      $fullname = $first . " " . $last;
      $email = 'miggydj@gmail.com';
      $data = [];
      $data['email'] = $email;
      $data['fullname'] = $fullname;
      return view('pages.about')->withData($data);
      #Ways to pass data to the view from the Controller
      // ->with($VariableName, $data)
      // ->withVariableName($Data)
      //

      //$view variable - variable that the view will use to call the data
      //$data - data that will be passed to the view
  }

  public function getContact(){
      return view('pages.contact');
  }
  # post request - usually forms
  // public function postContact(){
  //
  // }
}
