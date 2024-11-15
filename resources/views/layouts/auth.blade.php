<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
	<head>
		@include(
  	'components.head',
  	[
  		'prefix' => 'Dashboard',
  	]
  )
	</head>

	<body class="relative min-h-screen w-full font-sans antialiased">
		@yield('content')
	</body>
</html>
