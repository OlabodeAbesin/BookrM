@extends('layouts.teamlead')

@section('title')
  Team Bookings
@endsection


@section('content')
        <div class="col s8" style="background-color: white;padding-left: 20px;padding-right: 20px;margin-top: 1%;">
                    <table class="responsive-table highlight bordered">
                        <thead>
                            <tr>
                                <th>Booked Date</th>
                                <th>Booked By</th>
                                <th>Start Time</th>
                                <th>End Time</th>
                                <th>Meeting Room</th>
                                <th>Purpose</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            @foreach ($bookings as $mybooking)
                            
                                

                                <td>{{ $mybooking ->meeting_date}}</td>
                                <td>{{ $mybooking->User->fname}} {{ $mybooking->User->sname}}</td>
                                <td>{{ $mybooking ->meeting_start_time}}</td>
                                <td>{{ $mybooking ->meeting_end_time}}</td>
                                <td>{{ $mybooking ->meeting_room}}</td>
                                <td>{{ $mybooking ->purpose}}</td>
                                <td style="cursor: pointer;"><a href="/teamleadreschedule/{{ $mybooking->id }}/edit"  style="color: purple;">Reschedule</a></td>
                                <td style="cursor: pointer;"><a class="modal-trigger" href="#modal4" style="color: red;">Cancel</td>

                            </tr>
                                @endforeach

                                
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection