@extends('layouts.auth')
@section('title', __('pages.auth.title'))
@section('description', __('pages.auth.description'))
@section('content')
	<main class="container h-dvh">
		<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
			<div class="sm:mx-auto sm:w-full sm:max-w-sm">
				<img class="mx-auto h-10 w-auto" src="{{ asset('favicon.ico') }}" alt="@yield('author', 'Laravel')" />
				<h2 class="mt-2 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">
					{{ __('pages.auth.title') }}
				</h2>
			</div>
			<div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
				<form class="space-y-6" method="POST" action="{{ route('auth') }}">
					@method('POST')
					@csrf
					<div>
						<label for="username" class="block text-sm font-medium leading-6 text-gray-900">
							{{ __('pages.auth.username.label') }}
						</label>
						<div class="mt-2">
							<input
								id="username"
								name="username"
								type="text"
								autocomplete="username"
								required
								placeholder="{{ __('pages.auth.username.placeholder') }}"
								@class(['block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6', 'ring-red-300' => $errors->any()])
							/>
						</div>
					</div>
					<div>
						<label for="password" class="block text-sm font-medium leading-6 text-gray-900">
							{{ __('pages.auth.password.label') }}
						</label>
						<div class="mt-2">
							<input
								id="password"
								name="password"
								type="password"
								required
								placeholder="{{ __('pages.auth.password.placeholder') }}"
								@class(['block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6', 'ring-red-300' => $errors->any()])
							/>
							@if ($errors->any())
								@foreach ($errors->all() as $message)
									<p class="mt-2 text-sm text-red-600">{{ $message }}</p>
								@endforeach
							@endif
						</div>
					</div>
					<div>
						<button
							type="submit"
							class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
						>
							{{ __('pages.auth.submit') }}
						</button>
					</div>
				</form>
			</div>
		</div>
	</main>
@endsection
