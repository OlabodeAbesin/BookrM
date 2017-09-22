<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bookings as bookings;
use App\User as user;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $rule = [ 
        // 'user_id'=>'required',
        // "meeting_date" => "required", 
        // "meeting_room" => "required",
        // "meeting_start_time" => "required",
        // "meeting_end_time" => "required",
        // "purpose" => "required",
        // ]; 
        // $this->validate($request , $rule); 
        // echo "string";
        $bookCreator = new bookings;   
        $bookCreator->user_id = Auth::user()->id;      
        
        $bookCreator->meeting_room = $request->meeting_room; 
        $bookCreator->meeting_start_time = $request->meeting_start_time; 
        $bookCreator->meeting_end_time = $request->meeting_end_time;       
        $bookCreator->meeting_date = $request->meeting_date;  
        $bookCreator->purpose = $request->purpose;  
        $bookCreator->tname = Auth::user()->tname;
        

        $bookCreator->save();                   

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
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
        //
    }
}
