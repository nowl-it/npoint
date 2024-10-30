<nav
	class="sticky left-0 top-0 flex h-screen w-72 flex-col bg-gray-50 transition duration-500 ease-in-out grid-in-menu max-md:hidden"
>
	<div class="h-16 w-full content-center px-8">
		<a href="{{ route('dashboard') }}" class="inline-block">
			<h1
				class="bg-gradient-to-br from-indigo-400 via-indigo-600 to-indigo-300 bg-clip-text text-4xl font-bold text-transparent transition-all duration-300"
			>
				NPOINT
			</h1>
		</a>
	</div>
	<ul class="my-6 flex flex-col gap-2 px-4">
		<li>
			<a
				href="{{ route('dashboard') }}"
				class="flex h-10 w-full flex-row items-center justify-start gap-4 rounded bg-gray-200/30 px-4 text-gray-600 transition-colors duration-300 hover:bg-gray-200/50 hover:text-gray-800"
			>
				<x-hugeicons-global class="size-6" />
				<p class="font-medium">Trang chủ</p>
			</a>
		</li>
		<li>
			<a
				href="{{ route('dashboard') }}"
				class="flex h-10 w-full flex-row items-center justify-start gap-4 rounded px-4 text-gray-400 transition-colors duration-300 hover:bg-gray-200/50 hover:text-gray-800"
			>
				<x-heroicon-o-user-group class="size-6" />
				<p class="font-medium">Điểm danh</p>
			</a>
		</li>
		<li>
			<a
				href="{{ route('dashboard') }}"
				class="flex h-10 w-full flex-row items-center justify-start gap-4 rounded px-4 text-gray-400 transition-colors duration-300 hover:bg-gray-200/50 hover:text-gray-800"
			>
				<x-heroicon-o-home class="size-6" />
				<p class="font-medium">Lớp môn học</p>
			</a>
		</li>
		<li>
			<a
				href="{{ route('dashboard') }}"
				class="flex h-10 w-full flex-row items-center justify-start gap-4 rounded px-4 text-gray-400 transition-colors duration-300 hover:bg-gray-200/50 hover:text-gray-800"
			>
				<x-heroicon-s-chart-pie class="size-6" />
				<p class="font-medium">Thống kê</p>
			</a>
		</li>
		<li>
			<a
				href="{{ route('dashboard') }}"
				class="flex h-10 w-full flex-row items-center justify-start gap-4 rounded px-4 text-gray-400 transition-colors duration-300 hover:bg-gray-200/50 hover:text-gray-800"
			>
				<x-heroicon-s-clipboard-document-check class="size-6" />
				<p class="font-medium">Điểm danh muộn</p>
			</a>
		</li>
		<li>
			<a
				href="{{ route('dashboard') }}"
				class="flex h-10 w-full flex-row items-center justify-start gap-4 rounded px-4 text-gray-400 transition-colors duration-300 hover:bg-gray-200/50 hover:text-gray-800"
			>
				<x-ri-group-line class="size-6" />
				<p class="font-medium">Danh sách giảng viên</p>
			</a>
		</li>
	</ul>
</nav>
