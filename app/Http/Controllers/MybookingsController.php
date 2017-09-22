<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\bookings;
use App\User as User;
use Illuminate\Support\Facades\Auth;

class MybookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($tname)
    {
        // return view('mybookings');
        // $bookings = new bookings;
        // $view = ( Auth::user()->role == 'user' )? 'mybookings' : 'teamlead';
        // $bookings =  bookings::where('tname',$user->bookings->tname);
        // return view($view)->with('bookings', $bookings);

        // $booking = bookings::find($tname);
         $bookings = bookings::all()->where("tname",$tname);
        if (Auth::user()->role=='user'){
                return view('/mybookings')->with('bookings', $bookings);
            }else{
                return view('/teambookings')->with('bookings', $bookings);
            }
       
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
                
    }
    public function members($tname){
         $bookings = bookings::all()->where("tname",$tname);
         return view('/teammembers')->with('bookings', $bookings);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($tname)
    {
     // $view =  Auth::user()->id ;
       
           
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $editSchedule = bookings::find($id);
        // return view('mybookings',compact('editSchedule'));
        
        $booking = bookings::find($id);
        // return $bookings;
        if (Auth::user()->role=='user'){
                return view('/reschedule')->with('booking', $booking);
            }else{
                return view('/teamleadreschedule')->with('booking', $booking);
            }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $input, $id)
    {
        $this->validate($input, [
            'meeting_date'=>'required', 
            'meeting_start_time'=>'required',
            'meeting_end_time'=>'required',
            'purpose'=>'required',
            'meeting_room'=>'required',
            ]);
        $bookingUpdate = bookings::find($id);
        $bookingUpdate->meeting_date = $input->meeting_date;
        $bookingUpdate->meeting_start_time = $input->meeting_start_time;
        $bookingUpdate->meeting_end_time = $input->meeting_end_time;
        $bookingUpdate->purpose = $input->purpose;
        $bookingUpdate->meeting_room = $input->meeting_room;
        // echo $post;
        $bookingUpdate->save();
        $bookings =  bookings::all();
       if (Auth::user()->role=='user'){
                return view('welcome')->with('bookings', $bookings);
            }elseif (Auth::user()->role=='teamlead') {
                return view('teambookings')->with('bookings', $bookings);
            }else{
                return view('admindashboard')->with('bookings', $bookings);
            }
        // echo "string";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bookings = bookings::destroy($id);
        return back();
        // return redirect("/mybookings");
        // return view('/mybookings')->with('bookings', $bookings);
    }
}
