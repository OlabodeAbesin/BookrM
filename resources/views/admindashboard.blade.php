@extends('layouts.admin')

@section('title')
  All Bookings
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
                                <th>Purpose</th>
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
                              <td> {{ $booking->purpose }}</td> 
                              <td style="cursor: pointer;"><a style="background-color: purple;" class="modal-trigger btn " href="/reschedule/{{ $booking->id }}/edit" >Re-Schedule</a></td>
                                <!-- <td style="cursor: pointer;"><a class="modal-trigger" href="#modal4" style="color: red;">Cancel</td> -->
                            </tr>
                          @endforeach  
                        </tbody>
                    </table>
                
                </div>
@endsection