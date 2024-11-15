@extends('layouts.auth')
@section('title', __('pages.auth.title'))
@section('description', __('pages.auth.description'))
@section('content')
	<main class="container h-dvh">
		<div class="h-full content-center px-6 py-12 text-center">
			<h1 class="mb-2 text-6xl uppercase text-gray-600">Từ chối quyền truy cập</h1>
			<p>Bạn không có quyền xem, thao tác, chỉnh sửa với trang này.</p>
		</div>
	</main>
@endsection
