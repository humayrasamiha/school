<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class School extends Controller
{
  

  public function index(){

  	return view('school.index');
  	
  }

}
