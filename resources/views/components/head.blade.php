<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="csrf-token" content="{{ csrf_token() }}" />
<meta name="description" content="@yield('description', 'Idk')" />
<meta name="author" content="@yield('author', '9OwL')" />

<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
	href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap"
	rel="stylesheet"
/>

<link rel="icon" href="{{ asset('/favicon.ico') }}" />

@vite(['resources/css/app.css', 'resources/js/app.js'])

@bukStyles(true)
@bukScripts(true)

<title>
	@yield('title', 'IDK') @isset($prefix)  | {{ $prefix }}
	@endisset
</title>
