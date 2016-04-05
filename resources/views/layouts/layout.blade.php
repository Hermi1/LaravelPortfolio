<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{ URL::asset('assets/css/normalize.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('assets/css/skeleton.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('assets/css/navigation.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}" />

	<script type="text/javascript" src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			@include('layouts.header')
			@include('layouts.navigation')
		</div>
		<div class="row">
			@yield('body')
		</div>
		<div class="row">
			@include('layouts.footer')
		</div>
	</div>
</body>
</html>