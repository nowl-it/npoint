<header
	class="sticky left-0 top-0 z-10 flex h-16 w-full flex-row items-center justify-between bg-gray-50 grid-in-header"
	data-role="header"
>
	<div class="flex w-full flex-row items-center justify-end gap-4 px-8">
		<label for="menu-toggle" class="group relative hidden cursor-pointer">
			<x-untitledui-menu-03 class="size-8 stroke-gray-400 transition-colors duration-300 hover:stroke-black" />
			<span class="tooltip" side="left" position="bottom" start="left">Menu</span>
		</label>
		<label
			for="search-toggle"
			class="group relative flex cursor-pointer flex-row items-center justify-center gap-2 rounded bg-gray-200/50 px-2 py-1.5 shadow"
		>
			<input
				type="checkbox"
				id="search-toggle"
				@checked(false)
				class="hidden"
				data-role="search-header-trigger"
			/>
			<div class="mr-6 flex flex-row items-center gap-1">
				<x-untitledui-search-sm class="size-5 stroke-gray-400 transition-colors group-hover:stroke-black" />
				<p class="text-gray-400 group-hover:text-black">Tìm kiếm</p>
			</div>
			<span class="select-none font-medium text-gray-400 transition-colors group-hover:text-black">
				<kbd
					class="inline-block rounded-lg border border-gray-200 bg-gray-100 px-2 py-1.5 text-xs font-semibold text-gray-800 shadow"
				>
					Ctrl
				</kbd>
				<kbd
					class="inline-block rounded-lg border border-gray-200 bg-gray-100 px-2 py-1.5 text-xs font-semibold text-gray-800 shadow"
				>
					K
				</kbd>
			</span>
		</label>
		<div class="absolute bottom-0 left-0 right-0 top-0 z-50 hidden bg-gray-50" data-role="search-header">
			<section
				class="container flex size-full flex-row items-center rounded-b-2xl px-4 transition-colors duration-200"
			>
				<input
					type="search"
					class="size-full border-none bg-transparent outline-none ring-0 focus:border-0 focus:outline-none focus:ring-0"
					placeholder="Search... (Esc to close)"
					data-role="search-header-input"
				/>
				<x-eva-close-outline
					class="size-6 transform cursor-pointer fill-gray-400 transition-all duration-500 hover:rotate-180 hover:fill-gray-800"
				/>
			</section>
			<section
				data-role="search-header-result"
				class="absolute bottom-0 left-0 right-0 z-50 hidden h-dvh w-full translate-y-full transform bg-gray-100"
			>
				<div class="container mt-0.5 h-3/4 w-full rounded-md bg-white shadow"></div>
			</section>
		</div>
		<label for="noti" class="group relative cursor-pointer">
			<input type="checkbox" id="noti" class="hidden" />
			<x-heroicon-s-bell class="size-6 fill-gray-600" />
			<span class="absolute right-0 top-0 size-2 rounded-full bg-red-500"></span>
		</label>
		<label for="profile" class="group relative cursor-pointer">
			<input type="checkbox" id="profile" class="hidden" />
			<img src="{{ asset('favicon.ico') }}" alt="avatar" class="size-10 rounded-full border border-gray-200" />
			<div class="absolute bottom-0 right-0">
				<div class="relative flex size-3">
					<span
						class="absolute inline-flex h-full w-full animate-ping rounded-full bg-green-400 opacity-75"
					></span>
					<span class="relative inline-flex size-3 rounded-full bg-green-500"></span>
				</div>
			</div>
		</label>
	</div>
</header>
