@extends('layouts.teamlead')

@section('title')
  Reshedule Bookings
@endsection

@section('content')
        <div class="container">
            <div class="row">
                <div class="col s6 push-s3" style="background-color: white; padding: 4% 9%;">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li class="alert alert-danger" style="list-style-type: none;">{{ $error }}</li>
                        @endforeach
                    </ul>
                    <form class="col s12" action="/teamleadreschedule/{{ $booking->id }}" method="POST">
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
                                    <option selected>{{ $booking->meeting_room }}</option>
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