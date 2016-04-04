<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
</head>
<body>
	<div class="container">
		<div class="row">
			@include('layouts.header')
		</div>
		<div class="row">
			@include('sidebar')
			@yield('content')
		</div>
		<div class="row">
			@include('layouts.footer')
		</div>
	</div>
</body>
</html>