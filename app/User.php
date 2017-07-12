<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Input;
use DB;
use Hash;
use Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function saveUser($userdata) {
      $rules = ['email' => 'required|email', 'pass' => 'required|min:3|max:50', 'passr' => 'same:pass'];
      $validator = validator($userdata, $rules);
      if ($validator->fails()){
        return redirect('/user/create')->withErrors($validator)->withInput();
      }else{
        if (User::where('email', '=', $userdata['email'])->count() > 0) {
          return 0;
        }else{
          DB::table('users')->insert(['email' => $userdata['email'], 'password' => Hash::make($userdata['pass']),'remember_token' => '0','role' => '0']);
          return 1;
        }
      }
    }

    public function loginUser($userdata){
      Auth::attempt(['email' => Input::get('email'), 'password' => Input::get('pass')]);
    }
}
