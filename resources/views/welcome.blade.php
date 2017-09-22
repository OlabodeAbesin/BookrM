@extends('layouts.user')

@section('title')
  All Bookings
@endsection

@section('content')
<div class="navbar-fixed ">
    <nav>
      <div class="nav-wrapper #ab47bc purple lighten-1" >
      <a href="/" class="brand-logo" style="font-size: 4rem;color:white;" id="logo" ><em>cBookr</em></a>
        <ul class="right hide-on-med-and-down" id="header_text">
            <li><a href="/">Home</a></li>
            <li><a href="/mybookings/{{ Auth::user()->tname }}">My Bookings</a></li>
            <li><a class="modal-trigger" href="#modal2">Book Space</a></li>
            <li><a href="#">|</a></li>
            <li><a class="modal-trigger" href="#modal1">Change password</a></li>
            <li><a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout {{ Auth::user()->fname }}</a>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
      </div>
    </nav>
  </div>
        <br>
        <p id="page_info">All Bookings</p>

        <div class="container">
            <div class="row">
                <div class="col-md-9" style="background-color: white;padding-left: 20px;padding-right: 20px;">
                    <table class="responsive-table highlight bordered" id="ourtable">
                        <thead>
                            <tr>
                                <th>Booked Date</th>
                                <th>Start Time</th>
                                <th>End Time</th>
                                <th>Meeting Room</th>
                                <th>Team Name</th>
                            </tr>
                    </thead>

                                  <tbody>
                                  @foreach($bookings as $booking)
                                  <tr>
                                   <td> {{ $booking->meeting_date }}</td>
                                    <td> {{ $booking->meeting_start_time }}</td>
                                    <td> {{ $booking->meeting_end_time }}</td>
                                    <td> {{ $booking->meeting_room }}</td>
                                    <td> {{ $booking->tname }}</td>        
                                    </tr>
                                  @endforeach  
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
       @endsection
        @section('content1')
        @foreach ($bookings as $mybooking)
        <div id="modal4" class="modal" style="width: 20%;">  
    <form action="/bookings/{{ $mybooking->id }}" method="delete">
    
      <div class="modal-content">
        <div class="row">
          {{ csrf_field() }}
              <input type="hidden" name="_method" value="delete">
          <p style="text-align: center;" class="col s8 push-s2">Are you sure you want to cancel this booking?</p>
        </div>
    
        <div class="modal-footer">
          <button type="cancel" class=" modal-action modal-close waves-effect waves-green btn-flat"><b>Close</b></button> 
          <button type="submit" class=" modal-action modal-close waves-effect waves-green btn-flat" style="color: purple;"><b>Cancel</b></button> 
        </div>
      </div>
    </form>
  </div>
@endforeach
@endsection