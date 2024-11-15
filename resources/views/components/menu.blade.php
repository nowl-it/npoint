@php
 $menu = [
 	[
 		'name' => 'Trang chủ',
 		'icon' => 'hugeicons-global',
 		'route_name' => 'dashboard',
 	],
 	[
 		'name' => 'Điểm danh',
 		'icon' => 'heroicon-o-user-group',
 		'route_name' => 'attendance',
 	],
 	[
 		'name' => 'Lớp môn học',
 		'icon' => 'heroicon-o-home',
 		'route_name' => 'class',
 	],
 	[
 		'name' => 'Thống kê',
 		'icon' => 'heroicon-s-chart-pie',
 		'route_name' => 'dashboard',
 	],
 	[
 		'name' => 'Điểm danh muộn',
 		'icon' => 'heroicon-s-clipboard-document-check',
 		'route_name' => 'dashboard',
 	],
 ];

 $route = Route::currentRouteName();
 $route = explode('.', $route);
 $route = $route[0];
@endphp

<nav
	class="sticky left-0 top-0 flex h-screen w-72 flex-col bg-gray-50 transition duration-500 ease-in-out grid-in-menu max-md:hidden"
>
	<div class="h-16 w-full content-center px-8">
		<a href="{{ route('dashboard') }}" class="inline-block">
			<h1
				class="select-none bg-gradient-to-br from-indigo-400 via-indigo-600 to-indigo-300 bg-clip-text text-4xl font-bold text-transparent outline-0 transition-all duration-300"
			>
				NPOINT
			</h1>
		</a>
	</div>
	<ul class="my-6 flex flex-col gap-2 px-4">
		@foreach ($menu as $item)
			<li>
				<a
					href="{{ route($item['route_name']) }}"
					@class(['flex h-10 w-full flex-row items-center justify-start gap-4 rounded px-4 text-gray-600 transition-colors duration-300 hover:bg-gray-200/50 hover:text-gray-800', 'bg-gray-200/30' => $route === $item['route_name']])
				>
					@svg($item['icon'], 'size-6')
					<p class="font-medium">{{ $item['name'] }}</p>
				</a>
			</li>
		@endforeach
	</ul>
</nav>
