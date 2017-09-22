@extends('layouts.app')

@section('content')
<div class="mdl-grid" style="margin-top: 2%;">
  <div class="mdl-cell mdl-cell--6-col mdl-cell--3-offset style" style="background-color: white;">
    <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
      <div class="mdl-tabs__tab-bar">
        <a href="#starks-panel" class="mdl-tabs__tab is-active">Login</a>
        <a href="#lannisters-panel" class="mdl-tabs__tab">Register</a>
      </div>

      <div class="mdl-tabs__panel is-active" id="starks-panel">
        <div class="col-sm-6 col-sm-offset-3">
          <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}" style="margin-top: 10%;">
          {{ csrf_field() }}
            @if ($errors->has('email'))
              <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
            @endif

            <div class="row">
              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <div class="input-field col s12">
                  <input placeholder="" id="email" type="email" class="form-control validate" name="email" value="{{ old('email') }}" required autofocus>
                  <label for="email">Email</label>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <div class="input-field col s12">
                  <input placeholder="" id="password" type="password" class="form-control validate" name="password" required>
                  <label for="password">Password</label>
                </div>
              </div>
            </div>
            <br><br>
            <a class="waves-effect waves-light btn #ab47bc purple lighten-1" href="{{ url('/password/reset') }}" style="float: right; color: white;">
              Forgot Your Password?
            </a>
            <button type="submit" class="waves-effect waves-light btn #ab47bc purple lighten-1">
              Login
            </button>
            <br><br><br>
          </form>
        </div>
      </div>
      <div class="mdl-tabs__panel" id="lannisters-panel">
        <div style="padding: 3% 13%;">
          <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
          {{ csrf_field() }}
            <div class="row">
              <div class="{{ $errors->has('fname') ? ' has-error' : '' }}">
                <div class="input-field col s6">
                  <input placeholder="" id="fname" type="text" class="form-control validate" name="fname" value="{{ old('fname') }}" required autofocus>
                  <label for="fname">First Name</label>
                </div>
                @if ($errors->has('name'))
                  <span class="help-block">
                    <strong>{{ $errors->first('fname') }}</strong>
                  </span>
                @endif
              </div>
              <div class="{{ $errors->has('sname') ? ' has-error' : '' }}">
                <div class="input-field col s6">
                  <input placeholder="" id="sname" type="text" class="form-control validate" name="sname" value="{{ old('sname') }}" required autofocus>
                  <label for="sname">Last Name</label>
                </div>
                @if ($errors->has('sname'))
                  <span class="help-block">
                    <strong>{{ $errors->first('sname') }}</strong>
                  </span>
                @endif
              </div>
            </div>
            <div class="row">
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <div class="input-field col s12">
                <input placeholder="" id="email" type="email" class="form-control validate" name="email" value="{{ old('email') }}" required>
                <label for="email">E-Mail Address</label>
              </div>
              @if ($errors->has('email'))
                <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
              @endif
            </div> 
          </div>
          
            <input type="hidden" name="role" value="user">
          <div class="row">
            <div class="form-group{{ $errors->has('tel') ? ' has-error' : '' }}">
              <div class="input-field col s12">
                <input placeholder="" id="tel" type="tel" class="form-control validate" name="tel" value="{{ old('tel') }}" required>
                <label for="tel">Tel</label>
              </div>
              @if ($errors->has('tel'))
                <span class="help-block">
                  <strong>{{ $errors->first('tel') }}</strong>
                </span>
              @endif
            </div>
          </div>
          <div class="row">
            <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
              <div class="input-field col s6">
                <input placeholder="" id="password" type="password" class="form-control validate" name="password" required>
                <label for="password">Password</label>
              </div>
              @if ($errors->has('password'))
                <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
              @endif
            </div>
            <div class="{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
              <div class="input-field col s6">
                <input placeholder="" id="password-confirm" type="password" class="form-control validate" name="password_confirmation" required>
                <label for="password-confirm">Confirm Password</label>
              </div>
              @if ($errors->has('password_confirmation'))
                <span class="help-block">
                  <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
              @endif
            </div>
          </div>
          <select name="tname">
            <option value="" disabled selected>Select Group Name</option>
            <option value="Team 1">Team 1</option>
            <option value="Team 2">Team 2</option>
            <option value="Team 3">Team 3</option>
          </select> 
          <br><br>
          <button type="submit" class="waves-effect waves-light btn #ab47bc purple lighten-1" style="float: right;">
            Register
          </button>
        </form>
      </div>
    </div>
    </div>
  </div>
</div>
@endsection