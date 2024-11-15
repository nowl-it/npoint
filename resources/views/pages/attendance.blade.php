@extends('layouts.default')
@section('title', __('pages.home.title'))
@section('description', __('pages.home.description'))
@section('content')
	<div class="col-span-full flex flex-row items-center gap-4">
		<span class="h-px w-full bg-gray-200"></span>
		<h1 class="text-nowrap text-xl text-blue-800">Lớp học</h1>
		<span class="h-px w-full bg-gray-200"></span>
	</div>
	<table
		class="relative col-span-full table h-fit w-full table-auto border-collapse rounded-2xl border text-left text-sm"
	>
		<tbody>
			<tr>
				<th class="border p-4">Lớp học</th>
				<td class="border p-4 font-semibold text-blue-700">
					<a class="text-primary" href="https://lms.bkacad.edu.vn/instructor/class-subjects/5">
						D01K15 - Software Development Lifecycles
					</a>
				</td>
			</tr>
			<tr>
				<th class="border p-4">Tiến độ</th>
				<td class="border p-4">
					<span class="text-blue-600">48</span>
					/
					<span class="text-green-600">60</span>
					giờ (còn lại
					<span class="text-red-600">12</span>
					giờ)
				</td>
			</tr>
			<tr>
				<th class="border p-4">Phòng học</th>
				<td class="border p-4">Lab 5 - Tầng 5</td>
			</tr>
		</tbody>
	</table>
	<div class="col-span-full flex gap-8 font-semibold">
		<div>
			<span>Đúng giờ:</span>
			<span class="text-blue-500">16</span>
		</div>
		<div>
			<span>Muộn:</span>
			<span class="text-yellow-500">0</span>
		</div>
		<div>
			<span>Nghỉ:</span>
			<span class="text-red-500">6</span>
		</div>
		<div>
			<span>Có phép:</span>
			<span class="text-green-500">0</span>
		</div>
	</div>
	<div class="col-span-full flex gap-4">
		<a
			href="https://lms.bkacad.edu.vn/instructor/class-subjects/5?selectedTab=attendance-history-tab"
			class="inline-flex h-12 shrink-0 cursor-pointer select-none flex-wrap items-center justify-center gap-2 rounded border-gray-50 bg-gray-100 px-4 text-center text-sm font-semibold text-black no-underline shadow transition-all duration-200 ease-out hover:bg-gray-200"
		>
			<x-solar-history-2-bold class="size-4" />
			Lịch sử điểm danh
		</a>
		<div class="relative flex h-12 w-full">
			<input
				placeholder="MSSV, Tên sinh viên... "
				class="peer w-full appearance-none rounded-lg border border-gray-400 pl-10 pr-4 text-base"
				type="text"
				x-model="search"
			/>
			<svg
				class="pointer-events-none absolute left-3 top-1/2 inline h-5 w-5 -translate-y-1/2 text-gray-400"
				xmlns="http://www.w3.org/2000/svg"
				fill="none"
				viewBox="0 0 24 24"
				stroke-width="1.5"
				stroke="currentColor"
				aria-hidden="true"
				data-slot="icon"
			>
				<path
					stroke-linecap="round"
					stroke-linejoin="round"
					d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"
				></path>
			</svg>
			<svg
				class="absolute right-3 top-1/2 inline h-5 w-5 -translate-y-1/2 cursor-pointer text-gray-400 hover:text-gray-600"
				xmlns="http://www.w3.org/2000/svg"
				fill="none"
				viewBox="0 0 24 24"
				stroke-width="1.5"
				stroke="currentColor"
				aria-hidden="true"
				data-slot="icon"
			>
				<path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"></path>
			</svg>
		</div>
		<button
			type="button"
			class="inline-flex h-12 shrink-0 cursor-pointer select-none flex-wrap items-center justify-center gap-2 rounded border-gray-50 bg-gray-100 px-4 text-center text-sm font-semibold text-black no-underline shadow transition-all duration-200 ease-out hover:bg-gray-200"
		>
			<x-ri-reset-left-line class="size-4" />
			Random ngẫu nhiên
		</button>
	</div>
	<span class="col-span-full h-px w-full bg-gray-200"></span>
	<form action="" method="POST" class="col-span-full">
		<table class="relative table w-full table-auto border-collapse border">
			<thead>
				<tr class="sticky top-16 z-50 bg-gray-200">
					<th class="border p-2 text-center">#</th>
					<th class="border p-2 text-center">MSSV</th>
					<th class="truncate border p-2 text-center">Họ tên</th>
					<th class="border p-2 text-center">Chuyên cần</th>
					<th class="grow border p-2 text-center">Trạng thái</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="border p-3 text-center font-semibold text-blue-600" colspan="4">
						Thay đổi tất cả trạng thái
					</td>
					<td class="flex justify-center gap-8 p-3">
						@include('components.attendance.table.radio-group', ['name' => 'all'])
					</td>
				</tr>
				<tr class="group cursor-pointer border transition-colors duration-300 hover:text-blue-500">
					<td class="border p-3 text-center font-semibold">1</td>
					<td class="border p-3 text-center font-semibold">BKC15054</td>
					<td class="text-nowrap border p-3 font-semibold">Nguyễn Quang Anh</td>
					<td class="border p-3 text-center">
						<span class="font-semibold text-green-500">100%</span>
					</td>
					<td>
						<div class="mx-auto flex flex-row justify-center gap-8">
							@include('components.attendance.table.radio-group', ['name' => 'BKC15018'])
						</div>
					</td>
				</tr>
			</tbody>
		</table>
		<div class="mt-8 flex flex-col items-end justify-end gap-4">
			<textarea
				placeholder="Ghi chú..."
				class="form-textarea max-h-96 w-full rounded border-gray-400 placeholder-gray-400 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"
				rows="5"
				name="note"
			></textarea>
			<button
				type="submit"
				class="inline-flex h-12 w-96 shrink-0 cursor-pointer select-none flex-wrap items-center justify-center gap-2 rounded border-gray-50 bg-gray-100 px-4 text-center text-xl font-bold text-blue-700 no-underline shadow transition-all duration-200 ease-out hover:bg-gray-200"
			>
				<x-codicon-send class="size-6" />
				Cập nhật
			</button>
		</div>
	</form>
@endsection
