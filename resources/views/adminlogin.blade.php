@extends('layouts.app')

@section('content')
<div class="mdl-grid" style="margin-top: 2%;">
  <div class="mdl-cell mdl-cell--6-col mdl-cell--3-offset style" style="background-color: white;">
    <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
      <div class="mdl-tabs__tab-bar">
        <a href="#starks-panel" class="mdl-tabs__tab is-active">Login</a>
      </div>

      <div class="mdl-tabs__panel is-active" id="starks-panel">
        <div class="col-sm-6 col-sm-offset-3">
          <form class="form-horizontal" role="form" method="get" action="{{ url('/login') }}" style="margin-top: 10%;">
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
            <button type="submit" class="waves-effect waves-light btn #ab47bc purple lighten-1">
              Login
            </button>
            <br><br><br>
          </form>
        </div>
      </div>
    </div>
    </div>
  </div>
@endsection