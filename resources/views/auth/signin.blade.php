@extends('layouts.main') {{-- Web site Title --}}
@section('title') {{{ Lang::get('site/user.login') }}} :: @parent @stop

{{-- Content --}} @section('content')

<div class="container container-body">
<div class="page-header">
    <h3>{{{ Lang::get('site/user.signin') }}}</h3>
</div>

<form class="signin-form" method="POST" action="{{URL::to('signin')}}" accept-charset="UTF-8">
	<!-- CSRF Token -->
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<!-- ./ csrf token -->
    <fieldset>
    <div class="form-group {{$errors->has('email') ? 'has-error':''}}">
        <input class="form-control" tabindex="1" placeholder="{{ Lang::get('site/user.e_mail') }}" type="text" name="email" id="email" value="{{ Input::old('email') }}"> 
		{!!$errors->first('email', '<span class="help-block error-input">:message </span>')!!}
    </div>
    <div class="form-group {{$errors->has('password')?'has-error':''}}">
        <input class="form-control" tabindex="2" placeholder="{{ Lang::get('site/user.password') }}" type="password" name="password" id="password"> 
        {!!$errors->first('password', '<span class="help-block error-input">:message </span>')!!}
    </div>
    
    <div style="margin-bottom: 20px;">
        <button tabindex="3" type="submit" class="btn btn-primary">{{Lang::get('site/user.submit') }}</button>
        <a href="{{{ URL::to('forgot') }}}">
            <small>{{Lang::get('site/user.forgot_password') }}</small>
        </a>
    </div>

    <div style="margin-bottom: 20px;">
    <p class="text-muted">
        <small>{{Lang::get('site/user.do_not_have_an_account') }}</small>
    </p>
    <a class="btn btn-sm btn-default" href="{{{ URL::to('signup') }}}">{{Lang::get('site/user.create_an_account') }}</a>
    </div>
    </fieldset>
</form>
</div>
                    

@stop