<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		@include(
  	'components.head',
  	[
  		'prefix' => 'Dashboard',
  	]
  )
		@vite(['resources/js/pages/admin/global.js'])
	</head>

	<body class="relative grid h-auto min-h-screen w-full grid-cols-layout font-sans antialiased grid-areas-layout">
		@include('components.header')
		@include('components.menu')
		<main class="relative grid h-full min-h-screen w-full grid-cols-12 grid-rows-content gap-y-6 p-6 grid-in-main">
			@yield('content')
		</main>
		<nowl-alert alert="info" class="bg-dark" end="5000">Bạn có một thông báo mới!</nowl-alert>
	</body>
</html>
