<!doctype html>
<html>
<head>
	<title>Aura - @yield('title')</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="{{ asset('tailwind.js') }}"></script>
	<link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
	@include('aura::components.sidebar')

	<main class="aura-main-container">
		@yield('content')
	</main>
</body>
</html>