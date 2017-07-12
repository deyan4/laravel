<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Input;
use App\User;

class HomeController extends Controller
{
  public function home(){
    if (Auth::check()){
      return view('index');
    }else{
      return view('login');
    }
  }

  public function login(){
    $userdata = Input::all();
    $user = new User();
    $user->loginUser($userdata);
    if (Auth::check()){
      if(Auth::user()->role){
        return view('index');
      }else{
        return view('register');
      }
    }else{
      return view('login');
    }
  }
  public function logout(){
    Auth::logout();
    return redirect('/');
  }
}
