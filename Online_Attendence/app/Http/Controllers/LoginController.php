<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    //
  public function logout(Request $request) {
  Auth::logout();
  return back();
	}

}
