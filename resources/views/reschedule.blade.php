@extends('layouts.user')

@section('title')
  Reschedule Booking
@endsection

@section('content')
<div class="navbar-fixed ">
    <nav>
      <div class="nav-wrapper #ab47bc purple lighten-1" >
        <a href="#" class="brand-logo" style="font-size: 4rem;" id="logo">B<em style="color:purple;">o</em>okr</a>
        <ul class="right hide-on-med-and-down">
            <li><a href="/">Home</a></li>
            <li><a href="/mybookings/{{ Auth::user()->tname }}">My Bookings</a></li>
            <li><a class="modal-trigger" href="#modal2">Book Space</a></li>
            <li><a href="#">|</a></li>
            <li><a class="modal-trigger" href="#modal1">Change password</a></li>
            <li><a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
      </div>
    </nav>
  </div>

        <br>
        <p id="page_info">My Bookings</p>

        <div class="container">
            <div class="row">
                <div class="col s6 push-s3" style="background-color: white; padding: 4% 9%;">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li class="alert alert-danger" style="list-style-type: none;">{{ $error }}</li>
                        @endforeach
                    </ul>
                    <form class="col s12" action="/reschedule/{{ $booking->id }}" method="POST">
                        <div class="row">
                            <div class="input-field col s12">
                                <input placeholder="" name="meeting_date" id="datetimepicker2" type="text" class="validate" value="{{ $booking->meeting_date }}">
                                <label for="password">Date</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <label for="timepicker_ampm_dark">Start time</label>
                                <input placeholder="" name="meeting_start_time" id="timepicker_ampm_dark" class="timepicker" type="time" value="{{ $booking->meeting_start_time }}">
                            </div>
                            <div class="input-field col s6">
                                <label for="timepicker_ampm_dark">End Time</label>
                                <input placeholder="" name="meeting_end_time" id="timepicker_ampm_dark" class="timepicker" type="time" value="{{ $booking->meeting_end_time }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <select name="purpose">
                                    <option selected value="{{ $booking->purpose }}">{{ $booking->purpose }}</option>
                                    <option value="Skype Call">Skype Call</option>
                                    <option value="BrainStorming">BrainStorming</option>
                                    <option value="Team Briefing">Team Briefing</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <select name="meeting_room" >
                                    <option disabled selected>Meeting Room</option>
                                    <option value="1st Floor">1st Floor</option>
                                    <option value="6th Floor">6th Floor</option>
                                    <option value="Cube">Cube</option>
                                </select> 
                            </div>
                        </div>
                        <input type="hidden" name="_method" value="PUT">
                        {{ csrf_field() }}
                        <br><br><br>
                            <div class="modal-footer">
                            <button type="cancel" class=" modal-action modal-close waves-effect waves-green btn-flat"><b>Close</b></button>
                            <button type="submit" class=" modal-action modal-close waves-effect waves-green btn-flat" style="color: purple;"><b>Reschedule</b></button>
                        </div> 
                    </form>
                </div>
            </div>
        </div>
@endsection