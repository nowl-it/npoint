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

	<body class="relative grid min-h-screen w-full grid-cols-layout font-sans antialiased grid-areas-layout">
		@include('components.header')
		@include('components.menu')
		@yield('content')
		<nowl-alert alert="info" class="bg-dark" end="5000">Bạn có một thông báo mới!</nowl-alert>
	</body>
</html>
