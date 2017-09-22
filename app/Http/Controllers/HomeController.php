<?php

namespace App\Http\Controllers;
use App\bookings as bookings;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $bookings =  bookings::all();
            if (Auth::user()->role=='user'){
                return view('welcome')->with('bookings', $bookings);
            }elseif (Auth::user()->role=='admin') {
                return view('admindashboard')->with('bookings', $bookings);
            }else{
                return view('teamlead')->with('bookings', $bookings);
            }

        //$bookings = new bookings;
        // return $bookings;
        //return view($view)->with('bookings', $bookings);
    }
}
