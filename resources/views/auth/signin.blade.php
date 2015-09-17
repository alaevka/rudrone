@extends('layouts.main') {{-- Web site Title --}}
@section('title') {{{ Lang::get('site/user.login') }}} :: @parent @stop

{{-- Content --}} @section('content')

<div class="container container-body middle-v">
<div class="page-header" style="text-transform: uppercase;">
    <h3>{{{ Lang::get('site/user.signin') }}}</h3>
</div>

<div class="row">
    <div class="col-md-6">
        <p style="text-align: center;">
            Sign In with your RUDRONE account.
        </p>
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
                <div class="password-container" style="position: relative;">
                    <input class="form-control" tabindex="2" placeholder="{{ Lang::get('site/user.password') }}" type="password" name="password" id="password"> 
                    <a style="position: absolute; right: 8px; top: 8px;" href="{{{ URL::to('forgot') }}}">
                        <small>{{Lang::get('site/user.forgot_password') }}</small>
                    </a>
                </div>
                {!!$errors->first('password', '<span class="help-block error-input">:message </span>')!!}

            </div>
            
            <div style="margin-bottom: 20px; text-align: center;">
                <button tabindex="3" type="submit" style="width: 200px;" class="btn btn-primary">{{Lang::get('site/user.submit') }}</button>
            </div>

            <div style="margin-bottom: 20px; text-align: center;">
            <p class="text-muted">
                <small>{{Lang::get('site/user.do_not_have_an_account') }}</small>
            </p>
            <a class="btn btn-sm btn-default" href="{{{ URL::to('signup') }}}">{{Lang::get('site/user.create_an_account') }}</a>
            </div>
            </fieldset>
        </form>
    </div>
    <div class="col-md-6 social-auth">
        <p>
            You can also sign in using your Github, VK or Facebook social account.
        </p>
        @if (Session::has('provider_signin_error'))
            <div class="has-error"><span class="help-block error-input">{{ Session::get('provider_signin_error') }}</span></div>
        @endif
        <div>
            <div class="social-auth-button-block"><a class="btn btn-primary" href="{{ URL::to('signin/github') }}"><i class="fa fa-github fa-header-icon"></i> Sign In with Github</a></div>
            <div class="social-auth-button-block"><a class="btn btn-primary" href="{{ URL::to('signin/vk') }}"><i class="fa fa-vk fa-header-icon"></i> Sign In with VK</a></div>
            <div class="social-auth-button-block"><a class="btn btn-primary" href="{{ URL::to('signin/facebook') }}"><i class="fa fa-facebook-square fa-header-icon"></i> Sign In with Facebook</a></div>
        </div>
    </div>
</div>



</div>
                    

@stop