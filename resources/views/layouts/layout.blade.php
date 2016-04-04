<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
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