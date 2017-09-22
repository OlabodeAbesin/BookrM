<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ url('/css1.css')}}">
        <link rel="stylesheet" href="{{ url('/googleIcon.css')}}">
        <link rel="stylesheet" href="{{ url('/materializeCss.css')}}">
        <script type="text/javascript" src="{{ url('/jquery.js')}}"></script> 
        <link rel="stylesheet" type="text/css" href="{{ url('/jquery.datetimepicker.css')}}"/>
        <link rel="stylesheet" href="{{ url('/materialize.clockpicker.css')}}">
        
          
        <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
    </head>

    <body id="page">
    <div class="navbar-fixed ">
    <nav>
      <div class="nav-wrapper #ab47bc purple lighten-1" >
        <a href="/" class="brand-logo" style="font-size: 4rem;color:white;" id="logo" ><em>cBookr</em></a>
        <ul class="right hide-on-med-and-down" id="header_text">
            <li><a href="/">Home</a></li>
            <li><a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
      </div>
    </nav>
  </div>


<!-- Modal Structure -->
  <div id="modal1" class="modal" style="width: 30%;">
    <div class="modal-content">
    <h4 style="text-align: center;">Change Password</h4><br><br>
      <div class="row">
        <form class="col s7 push-s3">
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="" id="password" type="password" class="validate">
          <label for="password">Old Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="" id="password" type="password" class="validate">
          <label for="password">New Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="" id="password" type="password" class="validate">
          <label for="password"> Re-Type New Password</label>
        </div>
      </div>
    </form>
  </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat" style="color: purple;"><b>Change</b></a>
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
        <form class="col s8 push-s2">
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="" id="datetimepicker22" type="text" class="validate">
          <label for="password">Date</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <label for="timepicker_ampm_dark">Start time</label>
            <input placeholder="" id="timepicker_ampm_dark" class="timepicker" type="time">
        </div>
        <div class="input-field col s6">
          <label for="timepicker_ampm_dark">End Time</label>
            <input placeholder="" id="timepicker_ampm_dark" class="timepicker" type="time">
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea"></textarea>
          <label for="textarea1">Purpose</label>
        </div>
      </div>
      <select>
        <option value="" disabled selected>Select Group Name</option>
        <option value="1">Name</option>
        <option value="2">Name</option>
        <option value="3">Name</option>
      </select> 
    </form>
  </div>
    </div>
    <div class="modal-footer">
      <a href="#" class=" modal-action modal-close waves-effect waves-green btn-flat"><b>Close</b></a>
      <a href="#" class=" modal-action modal-close waves-effect waves-green btn-flat" style="color: purple;"><b>Reschedule</b></a>
    </div>
  </div>

  <div id="modal4" class="modal" style="width: 20%;">
    <div class="modal-content">
      <div class="row">
        <p style="text-align: center;" class="col s8 push-s2">Are you sure you want to cancel this schedule?</p>
        </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat"><b>Close</b></a>
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat" style="color: purple;"><b>Cancel</b></a>
    </div>
  </div>

  <!-- Modal Structure
  <div id="modal5" class="modal" style="width: 30%;min-height: 75%;">
    <div class="modal-content">
    <h4 style="text-align: center;">Register Team Leader</h4><br><br>
      <div class="row">
        <form class="col s7 push-s3">
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="" id="password" type="text" class="validate">
          <label for="group-name">Group Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="" id="password" type="text" class="validate">
          <label for="password">Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="" id="password" type="email" class="validate">
          <label for="password">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="" id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="" id="password" type="password" class="validate">
          <label for="password">Re-Type Password</label>
        </div>
      </div>
    </form>
  </div>
    </div>
    <div class="modal-footer">
      <a href="#" class=" modal-action modal-close waves-effect waves-green btn-flat">Register</a>
    </div>
  </div>
 --> 
  <div id="modal6" class="modal" style="width: 20%;">
    <div class="modal-content">
      <div class="row">
        <p style="text-align: center;" class="col s8 push-s2">Are you sure you want to <b>Delete</b> this user?</p>
      </div>
    </div>
    <div class="modal-footer">
      <a href="#" class=" modal-action modal-close waves-effect waves-green btn-flat"><b>Close</b></a>
      <a href="#" class=" modal-action modal-close waves-effect waves-green btn-flat" style="color: purple;"><b>Cancel</b></a>
    </div>
  </div>
        <br>
      <p id="page_info">@yield('pageInfo')</p>
    
    
      <div class="row">
        <div class="col s2" style="margin-right: 3%;">
          <ul class="nav">
            <a href="/teambookings/{{ Auth::user()->tname }}" style="color: black;"><li>View Team Bookings</li></a>
            <a href="/teammembers/{{ Auth::user()->tname }}" style="color: black;"><li>View Team Members</li></a>
            <li class="modal-trigger" href="#modal2">Book Meeting</li>
            <li class="modal-trigger" href="#modal1">Change Password</li>
          </ul>
        </div>
        @yield('content')

<script src="{{ url('/materialize.clockPicker.js')}}"></script>
<script src="{{ url('/materializeJs.js')}}"></script>
<script src="{{ url('/jquery.datetimepicker.full.js')}}"></script>
<script type="text/javascript">
    $('.modal-trigger').leanModal();


    $('#datetimepicker2').datetimepicker({
        timepicker:false,
        format:'d/m/Y',
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
