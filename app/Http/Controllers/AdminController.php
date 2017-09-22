<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as user;
use App\bookings as bookings;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $this->middleware('auth');
        $bookings = bookings::all();       
        return view('/admindashboard')->with('bookings', $bookings);
    }

    // public function dashboard()
    // {
    //     $this->middleware('auth');
    //     return view('admindashboard');
    // }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
            }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
            $this->middleware('auth');
                $viewusers = user::all()->where('role','!=','admin');
        return view('/viewusers')->with('viewusers',$viewusers);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $adminLogout = User::destroy($id);
        return view('/adminlogin')->with('adminLogout',$adminLogout);
    }
}
