<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mycontroller extends Controller
{
  public function insert()
  {
  	return view('insert');
  }

  public function show()
  {
  	return view('show');
  }

  public function insert_data()
  {
  	return view('insert_data');
  }

}
