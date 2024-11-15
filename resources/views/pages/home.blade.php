@extends('layouts.default')
@section('title', __('pages.home.title'))
@section('description', __('pages.home.description'))
@vite(['resources/js/pages/admin/index.js'])

@props([
    'total_hours',
    'total_teaching_hours',
])
@section('content')
	<section class="col-span-full grid w-full grid-cols-3 gap-x-4">
		<div class="h-fit border-r">
			<p class="text-gray-600">Tổng số giờ dạy tháng này</p>
			<div class="flex flex-row items-end font-bold">
				<h1 class="mt-1 text-6xl text-sky-600">{{ $total_hours }}</h1>
				<p class="ml-1 text-gray-800">giờ</p>
			</div>
		</div>
		<div class="h-fit border-r">
			<p class="text-gray-600">Tổng số giờ đã dạy tháng này</p>
			<div class="flex flex-row items-end font-bold">
				<h1 class="mt-1 text-6xl text-lime-400">{{ $total_teaching_hours }}</h1>
				<p class="ml-1 text-gray-800">giờ</p>
			</div>
		</div>
		<div class="h-fit">
			<p class="text-gray-600">Tổng số giờ chưa dạy tháng này</p>
			<div class="flex flex-row items-end font-bold">
				<h1 class="mt-1 text-6xl text-red-400">{{ $total_hours - $total_teaching_hours }}</h1>
				<p class="ml-1 text-gray-800">giờ</p>
			</div>
		</div>
	</section>
	<section class="col-span-full w-full space-y-6">
		<div class="flex flex-row items-center gap-x-5">
			<h1 class="text-nowrap text-xl font-bold">Lịch giảng dạy</h1>
			<span class="h-px w-full bg-gray-200"></span>
		</div>
		<div id="calendar" class="col-span-full w-full"></div>
	</section>
	<span class="col-span-full h-px bg-gray-200"></span>
	<div class="col-span-full">
		<p class="font-semibold uppercase italic text-gray-400">
			đúng như bạn nghĩ rồi, ui của trang điểm danh bkacad 🐧
		</p>
	</div>
@endsection
