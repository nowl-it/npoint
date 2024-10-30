@extends('layouts.default')
@section('title', __('pages.home.title'))
@section('description', __('pages.home.description'))
@section('content')
	<main class="relative min-h-screen w-full p-6 grid-in-main">
		<div id="calendar" class="w-full"></div>
	</main>
@endsection
