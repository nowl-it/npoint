@extends('layouts.default')
@section('title', __('pages.auth.register.title'))
@section('description', __('pages.auth.register.description'))
@section('content')
	<main class="container h-dvh">
		<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
			<div class="sm:mx-auto sm:w-full sm:max-w-sm">
				<img class="mx-auto h-10 w-auto" src="{{ asset('favicon.ico') }}" alt="@yield('author', 'Laravel')" />
				<h2 class="mt-2 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">
					{{ __('pages.auth.register.title') }}
				</h2>
			</div>
			<div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
				<form class="space-y-6" method="POST" action="{{ route('auth.register') }}">
					@method('POST')
					@csrf
					<div>
						<label for="name" class="block text-sm font-medium leading-5 text-gray-700">
							{{ __('pages.auth.register.name.label') }}
						</label>
						<div class="mt-1 rounded-md shadow-sm">
							<input
								id="name"
								type="text"
								name="name"
								value="{{ old('name') }}"
								placeholder="{{ __('pages.auth.register.name.placeholder') }}"
								required
								autofocus
								autocomplete="name"
								class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
							/>
						</div>
					</div>
					<div>
						<label for="email" class="block text-sm font-medium leading-5 text-gray-700">
							{{ __('pages.auth.register.email.label') }}
						</label>
						<div class="mt-1 rounded-md shadow-sm">
							<input
								id="email"
								type="email"
								name="email"
								value="{{ old('email') }}"
								placeholder="{{ __('pages.auth.register.email.placeholder') }}"
								required
								autofocus
								autocomplete="email"
								class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
							/>
						</div>
					</div>
					<div>
						<label for="password" class="block text-sm font-medium leading-5 text-gray-700">
							{{ __('pages.auth.register.password.label') }}
						</label>
						<div class="mt-1 rounded-md shadow-sm">
							<input
								id="password"
								type="password"
								name="password"
								required
								placeholder="{{ __('pages.auth.register.password.placeholder') }}"
								class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
							/>
						</div>
					</div>
					<div>
						<label for="confirm-password" class="block text-sm font-medium leading-5 text-gray-700">
							{{ __('pages.auth.register.confirm-password.label') }}
						</label>
						<div class="mt-1 rounded-md shadow-sm">
							<input
								id="confirm-password"
								type="password"
								name="confirm-password"
								required
								placeholder="{{ __('pages.auth.register.confirm-password.placeholder') }}"
								class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
							/>
						</div>
					</div>
					@if ($errors->any())
						<div class="rounded-md bg-red-50 p-4">
							<div class="flex">
								<div class="flex-shrink-0">
									<svg
										class="h-5 w-5 text-red-400"
										xmlns="http://www.w3.org/2000/svg"
										viewBox="0 0 20 20"
										fill="currentColor"
										aria-hidden="true"
									>
										<path
											fill-rule="evenodd"
											d="M10 3c4.97 0 9 4.03 9 9s-4.03 9-9 9-9-4.03-9-9 4.03-9 9-9zm0 2c-3.86 0-7 3.14-7 7s3.14 7 7 7 7-3.14 7-7-3.14-7-7-7zm1 5a1 1 0 00-2 0v4a1 1 0 002 0V10z"
											clip-rule="evenodd"
										/>
									</svg>
								</div>
								<div class="ml-3">
									<h3 class="text-sm font-medium text-red-800">
										{{ __('pages.auth.register.error') }}
									</h3>
									<div class="mt-2 text-sm text-red-700">
										<ul class="list-disc space-y-1 pl-5">
											@foreach ($errors->all() as $error)
												<li>{{ $error }}</li>
											@endforeach
										</ul>
									</div>
								</div>
							</div>
						</div>
					@endif

					<div>
						<button
							type="submit"
							class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
						>
							{{ __('pages.auth.register.submit') }}
						</button>
					</div>
				</form>
				<p class="mt-10 text-center text-sm text-gray-500">
					{{ __('pages.auth.register.have_account') }}
					<a
						href="{{ url('/auth/login') }}"
						class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500"
					>
						{{ __('pages.auth.register.have_account_label') }}
					</a>
				</p>
			</div>
		</div>
	</main>
@endsection
