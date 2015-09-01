@extends('layouts.empty') {{-- Web site Title --}}
@section('title') {{{ Lang::get('site/user.signup') }}} :: @parent
@stop {{-- Content --}} @section('content')
<div class="page-header">
	<h1>{{{ Lang::get('site/user.signup') }}}</h1>
</div>
<form method="POST" action="{{URL::to('signup')}}" accept-charset="UTF-8">
	<!-- CSRF Token -->
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<!-- ./ csrf token -->
	<fieldset>
		<div class="form-group {{$errors->has('firstname')?'has-error':''}}">
			<label for="firstname"> {{{ Lang::get('site/user.firstname') }}} </label> <input
				class="form-control"
				placeholder="{{{ Lang::get('site/user.firstname') }}}" type="text"
				name="firstname" id="firstname" value="{{{ Input::old('firstname') }}}"> <span
				class="help-block">{!!$errors->first('firstname', '<span
				class="help-block">:message </span>')!!}
			</span>
		</div>
		<div class="form-group {{$errors->has('lastname')?'has-error':''}}">
			<label for="lastname"> {{{ Lang::get('site/user.lastname') }}} </label> <input
				class="form-control"
				placeholder="{{{ Lang::get('site/user.lastname') }}}" type="text"
				name="lastname" id="lastname" value="{{{ Input::old('lastname') }}}"> <span
				class="help-block">{!!$errors->first('lastname', '<span
				class="help-block">:message </span>')!!}
			</span>
		</div>
		<div class="form-group {{$errors->has('email')?'has-error':''}}">
			<label for="email"> {{{ Lang::get('site/user.e_mail') }}} <small>{{
					Lang::get('site/user.confirmation_required') }}</small>
			</label> <input class="form-control"
				placeholder="{{{ Lang::get('site/user.e_mail') }}}" type="text"
				name="email" id="email" value="{{{ Input::old('email') }}}"> <span
				class="help-block">{!!$errors->first('email', '<span
				class="help-block">:message </span>')!!}
			</span>
		</div>
		<div class="form-group {{$errors->has('password')?'has-error':''}}">
			<label for="password"> {{{ Lang::get('site/user.password') }}} </label>
			<input class="form-control"
				placeholder="{{{ Lang::get('site/user.password') }}}"
				type="password" name="password" id="password"> <span
				class="help-block">{!!$errors->first('password', '<span
				class="help-block">:message </span>')!!}
			</span>
		</div>
		<div
			class="form-group {{$errors->has('password_confirmation')?'has-error':''}}">
			<label for="password_confirmation"> {{{
				Lang::get('site/user.password_confirmation') }}} </label> <input
				class="form-control"
				placeholder="{{{ Lang::get('site/user.password_confirmation') }}}"
				type="password" name="password_confirmation"
				id="password_confirmation"> <span class="help-block">{!!$errors->first('password_confirmation',
				'<span class="help-block">:message </span>')!!}
			</span>
		</div>
		<div class="form-actions form-group">
			<button type="submit" class="btn btn-primary my-button">{{{
				Lang::get('site/user.submit') }}}</button>
				&nbsp;&nbsp;&nbsp;
				{{{ Lang::get('site/user.or_go_to_the') }}} <a href="{{{ URL::to('/') }}}">{{{ Lang::get('site/user.index_page') }}}</a>
		</div>
	</fieldset>
</form>
@stop