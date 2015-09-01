<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>@section('title') rudrone community @show</title>
	@section('meta_keywords')
	<meta name="keywords" content="your, awesome, keywords, here" />
	@show @section('meta_author')
	<meta name="author" content="Kirill Alaev" />
	@show @section('meta_description')
	<meta name="description" content="your, awesome, keywords, here" />
	@show
	<!-- Mobile Specific Metas ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- CSS ================================================== -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{{ asset('css/style.css') }}}">
	<!-- Javascripts ================================================== -->

	<link rel="shortcut icon" href="{{{ asset('assets/site/ico/favicon.ico') }}}">
	<style>
    	  
    </style>
</head>

<body>
	<!-- <nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="{{{ URL::to('/') }}}">
	        RUDRONE community 
	      </a>
	    </div>
	  </div>
	</nav> -->
	<div class="container">

	@yield('content')
	</div>
	@yield('scripts')
</body>
</html>