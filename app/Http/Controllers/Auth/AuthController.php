<?php

namespace App\Http\Controllers\Auth;

use App\Agency;
use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Controller;
use Input;
use Session;

class AuthController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return User
     */


    protected function create(array $data)
    {
        return Agency::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function getLogout()
    {
        \Auth::logout();
        Session::flush();
        return redirect('/');
    }

    public function getLogin()
    {

        if (\Auth::check()) {
            return redirect('/');
        }

//        return view('login');
    }
}
