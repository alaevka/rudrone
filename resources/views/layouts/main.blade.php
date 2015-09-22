<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>rudrone community - @yield('title')</title>
	<meta name="keywords" content="your, awesome, keywords, here" />
	<meta name="author" content="Kirill Alaev" />
	<meta name="description" content="your, awesome, keywords, here" />
	<link rel="shortcut icon" href="{{{ asset('favicon.ico') }}}">
	<!-- Mobile Specific Metas ================================ -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- CSS ================================================== -->
	{!! Html::style( asset('css/app.css')) !!}
	<!-- Javascripts ========================================== -->
	{!! Html::script('js/app.js') !!}
	{{-- @yield('scripts') --}}
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{!! URL::to('/') !!}"><img src="/images/logo_drone2.png" ></a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="{{ URL::to('wizard') }}">{{Lang::get('site/user.go_button') }}</a></li>
					<li><a href="{{ URL::to('map') }}">{{Lang::get('site/user.map_button') }}</a></li>
					<li><a href="">{{Lang::get('site/user.blogs') }}</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					{{-- <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">link <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">link</a></li>
							<li><a href="#">link</a></li>
							<li><a href="#">link</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">separated link</a></li>
						</ul>
					</li> --}}
					@if (Auth::check())
					<li><a href="{{ URL::to('profile') }}"><i class="fa fa-cogs"></i> {{ Lang::get('site/user.profile') }}</a></li>
					<li><a href="{{ URL::to('signout') }}"><i class="fa fa-sign-out"></i> {{ Lang::get('site/user.signout') }}</a></li>
					@else
					<li><a href="{{ URL::to('signin') }}">{{Lang::get('site/user.signin_header_link') }}</a></li>
					<!-- <li><a href=""><i class="fa fa-facebook-square fa-header-icon"></i></a></li>
					<li><a href=""><i class="fa fa-vk fa-header-icon"></i></a></li> -->
					@endif
				</ul>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>
	@yield('content')
</body>
</html>