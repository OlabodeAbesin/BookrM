<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ url('css1.css')}}">
        <link rel="stylesheet" href="{{ url('googleIcon.css')}}">
        <link rel="stylesheet" href="{{ url('materializeCss.css')}}">
        <script type="text/javascript" src="{{ url('jquery.js')}}"></script> 
        <link rel="stylesheet" type="text/css" href="{{ url('jquery.datetimepicker.css')}}"/>
        <link rel="stylesheet" href="{{ url('materialize.clockpicker.css')}}">
        <style>
          body {
            /*background: linear-gradient(
                rgba(0,0,0,0.4),
                rgba(0,0,0,0.4)
            ),
            url(/img5.jpg) no-repeat;*/
            background-size: cover;
            background-attachment: fixed;
            animation: background 1s;
            margin: 0;
            }
        </style>
        <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
    </head>

    <body id="page">
    


<!-- Modal Structure -->
  <div id="modal1" class="modal" style="width: 30%;">
    <div class="modal-content">
      <h4 style="text-align: center;">Change Password</h4><br><br>
        <div class="row">
          <form class="col s7 push-s3" method="Push" action="/changePassword">
            <div class="row">
              <div class="input-field col s12">
                <input placeholder="" name="password" id="password" type="password" class="validate">
                <label for="password">Old Password</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input placeholder="" name="password2" id="password" type="password" class="validate">
                <label for="password">New Password</label>
              </div>
            </div>
              <div class="row">
                <div class="input-field col s12">
                  <input placeholder="" name="password_confirmation" id="password" type="password" class="validate">
                  <label for="password"> Re-Type New Password</label>
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit"class=" modal-action modal-close waves-effect waves-green btn-flat" style="color: purple;"><b>Change</b></button> 
              </div>
          </form>
        </div>
    </div>
  </div> 
  <!-- Modal Structure -->
  <div id="modal2" class="modal" style="width: 40%;min-height: 75%;">
    <div class="modal-content">
      <h4 style="text-align: center;">Book Schedule</h4><br><br>
        <div class="row">
          <form class="col s8 push-s2" method="POST" action="/create_bookings">
            {{ csrf_field() }}
              <div class="row">
                <div class="input-field col s12">
                  <input placeholder="" id="datetimepicker2" type="text" class="validate" name="meeting_date">
                  <label for="password">Date</label>
                </div>
              </div>

              <div class="row">
               <div class="input-field col s6">
                  <label for="timepicker_ampm_dark">Start time</label>
                  <input placeholder="" id="timepicker_ampm_dark" name="meeting_start_time" class="timepicker" type="time">
                </div>

                <div class="input-field col s6">
                  <label for="timepicker_ampm_dark">End Time</label>
                  <input placeholder="" id="timepicker_ampm_dark" name="meeting_end_time" class="timepicker" type="time">
                </div>
              </div>
      
              <div class="row">
                <div class="input-field col s12">
                  <select name="purpose">
                    <option disabled selected>Purpose</option>
                    <option value="Skype Call">Skype Call</option>
                    <option value="BrainStorming">BrainStorming</option>
                    <option value="Team Briefing">Team Briefing</option>
                  </select>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12">
                  <select name="meeting_room">
                    <option disabled selected>Meeting Room</option>
                    <option value="1st Floor">1st Floor</option>
                    <option value="6th Floor">6th Floor</option>
                    <option value="Cube">Cube</option>
                  </select> 
                </div>
              </div>
              
              <div class="modal-footer">
                <button type="submit" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</button> 
                <button type="submit" class=" modal-action modal-close waves-effect waves-green btn-flat" style="color: purple;"><b>Book</b></button>
              </div>
          </form>
        </div>
    </div>
  </div>
    

  <div id="modal3" class="modal" style="width: 30%;min-height: 70%;">
    <div class="modal-content">
    <h4 style="text-align: center;"> Re-Schedule</h4><br><br>
      <div class="row">
        <form class="col s8 push-s2" action="/reschedule" method="Post">
          <div class="row">
            <div class="input-field col s12">
              <input placeholder="" name="meeting_date" id="datetimepicker22" type="text" class="validate">
              <label for="password">Date</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <label for="timepicker_ampm_dark">Start time</label>
                <input placeholder="" name="meeting_start_time" id="timepicker_ampm_dark" class="timepicker" type="time">
            </div>
            <div class="input-field col s6">
              <label for="timepicker_ampm_dark">End Time</label>
                <input placeholder="" name="meeting_end_time" id="timepicker_ampm_dark" class="timepicker" type="time">
            </div>
          </div>
            <div class="row">
                <div class="input-field col s12">
                  <select name="purpose">
                    <option disabled selected>Purpose</option>
                    <option value="Skype Call">Skype Call</option>
                    <option value="BrainStorming">BrainStorming</option>
                    <option value="Team Briefing">Team Briefing</option>
                  </select>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12">
                  <select name="meeting_room">
                    <option disabled selected>Meeting Room</option>
                    <option value="1st Floor">1st Floor</option>
                    <option value="6th Floor">6th Floor</option>
                    <option value="Cube">Cube</option>
                  </select> 
                </div>
              </div>
              <div class="modal-footer">
                <button type="cancel" class=" modal-action modal-close waves-effect waves-green btn-flat"><b>Close</b></button>
                <button type="submit" class=" modal-action modal-close waves-effect waves-green btn-flat" style="color: purple;"><b>Reschedule</b></button>
              </div> 
        <form>
      </div>
    </div> 
  </div>

  

  

  <!-- Modal Structure -->
  <div id="modal5" class="modal" style="width: 30%;min-height: 75%;">
    <div class="modal-content">
      <h4 style="text-align: center;">Register Team Leader</h4><br><br>
        <div class="row">
          <form class="col s7 push-s3" action="/registerTeam" method="Post">
            <div class="row">
              <div class="input-field col s12">
                <input placeholder="" name= "tname" id="password" type="text" class="validate">
                <label for="group-name">Group Name</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input placeholder="" name= "fname" id="password" type="text" class="validate">
                <label for="password">First Name</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input placeholder="" name= "sname" id="password" type="text" class="validate">
                <label for="password">Last Name</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input placeholder="" name="email" id="password" type="email" class="validate">
                <label for="password">Email</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input placeholder="" name="password" id="password" type="password" class="validate">
                <label for="password">Password</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input placeholder="" name="password_confirmation" id="password" type="password" class="validate">
                <label for="password">Re-Type Password</label>
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class=" modal-action modal-close waves-effect waves-green btn-flat">Register</button>
            </div>    
          </form>
        </div>
    </div>
  </div>
        @yield('content')
        @yield('content1')
<script src="{{ url('materialize.clockPicker.js')}}"></script>
<script src="{{ url('materializeJs.js')}}"></script>
<script src="{{ url('jquery.datetimepicker.full.js')}}"></script>
<script type="text/javascript">
    $('.modal-trigger').leanModal();


    $('#datetimepicker2').datetimepicker({
        timepicker:false,
        format:'Y/m/d',
        formatDate:'Y/m/d'
    });
    //Time Picker:
$('.timepicker').pickatime({
    default: 'now',
    twelvehour: false, // change to 12 hour AM/PM clock from 24 hour
    donetext: 'OK',
  autoclose: false,
  vibrate: true // vibrate the device when dragging clock hand
});

$('select').material_select();
</script>
    </body>
</html>
