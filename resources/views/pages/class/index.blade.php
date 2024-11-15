@extends('layouts.default')
@section('title', __('pages.home.title'))
@section('description', __('pages.home.description'))
@section('content')
	<a
		href="{{ route('class.detail', ['id' => 1]) }}"
		class="col-span-2 flex flex-row gap-4 rounded bg-white p-4 shadow transition-shadow duration-300 hover:shadow-lg"
	>
		<div class="size-14 flex-shrink-0 content-center rounded bg-orange-600 p-2 text-center">
			<p class="text-xl font-semibold text-white">DD</p>
		</div>
		<h1 class="line-clamp-2 text-left text-lg font-medium">BT_D01K15</h1>
	</a>
@endsection
