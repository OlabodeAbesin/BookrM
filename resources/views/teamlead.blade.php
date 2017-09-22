@extends('layouts.teamlead')

@section('title')
  My Users
@endsection

@section('content')
        <div class="col s9" style="background-color: white;padding-left: 20px;padding-right: 20px;margin-top: 1%;">
                    <table class="responsive-table highlight bordered" id="ourtable">
                        <thead>
                            <tr>
                            
                                <th>Booked Date</th>
                                <th>Group Name</th>
                                <th>Start Time</th>
                                <th>End Time</th>
                                <th>Meeting Room</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                         @foreach($bookings as $booking)
                                  <tr>
                                   <td> {{ $booking->meeting_date }}</td>
                                   <td> {{ $booking->tname }}</td> 
                                    <td> {{ $booking->meeting_start_time }}</td>
                                    <td> {{ $booking->meeting_end_time }}</td>
                                    <td> {{ $booking->meeting_room }}</td>
                                                                      
                                    </tr>
                                  @endforeach  
                           
     </tbody>
                    </table>
                </div>
@endsection