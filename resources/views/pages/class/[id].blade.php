@extends('layouts.default')
@section('title', __('pages.home.title'))
@section('description', __('pages.home.description'))
@vite(['resources/js/pages/admin/index.js'])

@section('content')
	<div class="col-span-full flex flex-row items-center justify-start gap-6">
		<a href="{{ route('class') }}">
			<x-ri-arrow-left-s-line
				class="size-8 cursor-pointer fill-gray-400 transition-colors duration-300 hover:fill-black"
			/>
		</a>
		<h1 class="text-4xl font-bold text-gray-600">BT_D01K15</h1>
	</div>
	<div class="col-span-full">
		<ul
			class="flex w-full flex-row flex-nowrap items-start justify-start overflow-x-hidden scroll-smooth border border-b-0 scrollbar-thin hover:overflow-x-auto"
		>
			<li class="border-r last:border-r-0">
				<a
					href="{{ route('class') }}"
					class="inline-block size-full whitespace-nowrap bg-gray-200 p-4 transition-colors duration-300 hover:bg-gray-200"
				>
					Design Database System
				</a>
			</li>
			<li class="border-r last:border-r-0">
				<a
					href="{{ route('class') }}"
					class="inline-block size-full whitespace-nowrap bg-gray-100 p-4 transition-colors duration-300 hover:bg-gray-200"
				>
					Design Database System
				</a>
			</li>
			<li class="border-r last:border-r-0">
				<a
					href="{{ route('class') }}"
					class="inline-block size-full whitespace-nowrap bg-gray-100 p-4 transition-colors duration-300 hover:bg-gray-200"
				>
					Design Database System
				</a>
			</li>
			<li class="border-r last:border-r-0">
				<a
					href="{{ route('class') }}"
					class="inline-block size-full whitespace-nowrap bg-gray-100 p-4 transition-colors duration-300 hover:bg-gray-200"
				>
					Design Database System
				</a>
			</li>
			<li class="border-r last:border-r-0">
				<a
					href="{{ route('class') }}"
					class="inline-block size-full whitespace-nowrap bg-gray-100 p-4 transition-colors duration-300 hover:bg-gray-200"
				>
					Design Database System
				</a>
			</li>
			<li class="border-r last:border-r-0">
				<a
					href="{{ route('class') }}"
					class="inline-block size-full whitespace-nowrap bg-gray-100 p-4 transition-colors duration-300 hover:bg-gray-200"
				>
					Design Database System
				</a>
			</li>
			<li class="border-r last:border-r-0">
				<a
					href="{{ route('class') }}"
					class="inline-block size-full whitespace-nowrap bg-gray-100 p-4 transition-colors duration-300 hover:bg-gray-200"
				>
					Design Database System
				</a>
			</li>
			<li class="border-r last:border-r-0">
				<a
					href="{{ route('class') }}"
					class="inline-block size-full whitespace-nowrap bg-gray-100 p-4 transition-colors duration-300 hover:bg-gray-200"
				>
					Design Database System
				</a>
			</li>
			<li class="border-r last:border-r-0">
				<a
					href="{{ route('class') }}"
					class="inline-block size-full whitespace-nowrap bg-gray-100 p-4 transition-colors duration-300 hover:bg-gray-200"
				>
					Design Database System
				</a>
			</li>
		</ul>
		<div class="min-h-dvh w-full border p-4">
			<h1 class="text-4xl font-bold text-gray-600">Design Database System</h1>
			<h2 class="text-xl font-bold text-gray-500">BT_D01K15 - Trần Huy Hoàng</h2>
			<h3 class="text-lg font-bold text-gray-600">Thời lượng buổi học: 30 buổi (76.6%)</h3>

			<section class="mt-6 grid w-full grid-cols-3 gap-x-4">
				<div class="h-fit border-r">
					<p class="text-gray-600">Tổng số giờ dạy tháng này</p>
					<div class="flex flex-row items-end font-bold">
						<h1 class="mt-1 text-6xl text-sky-600">106</h1>
						<p class="ml-1 text-gray-800">giờ</p>
					</div>
				</div>
				<div class="h-fit border-r">
					<p class="text-gray-600">Tổng số giờ đã dạy tháng này</p>
					<div class="flex flex-row items-end font-bold">
						<h1 class="mt-1 text-6xl text-lime-400">106</h1>
						<p class="ml-1 text-gray-800">giờ</p>
					</div>
				</div>
				<div class="h-fit">
					<p class="text-gray-600">Tổng số giờ chưa dạy tháng này</p>
					<div class="flex flex-row items-end font-bold">
						<h1 class="mt-1 text-6xl text-red-400">106</h1>
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
		</div>
	</div>
@endsection
