<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';
 //(Auth::user()->role=='user') ?  (protected $redirect = '/') : 'teamlead';
    // if (Auth::user()->role=='user'){
                  
    //         }else{
    //             protected return back();
    //         }
   

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'fname' => 'required|max:20',
            'sname' => 'required|max:20',
            'tname' => 'required|max:20',
            'role'=> 'required',
            'email' => 'required|email|max:255|unique:users',            
            'tel' => 'required|max:12',
            'password' => 'required|min:6|confirmed',
            

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'fname' => $data['fname'],
            'sname' => $data['sname'],            
            'tname' => $data['tname'],
            'role' => $data['role'],
            'email' => $data['email'],
            'tel' => $data['tel'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
