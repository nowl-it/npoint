<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
{
	protected $table = "accounts";
	/**
	 * Determine if the user is authorized to make this request.
	 */
	public function authorize(): bool
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
	 */
	public function rules(): array
	{
		return [
			'username' => 'required|string|max:255',
			'password' => 'required|string|min:8',
		];
	}

	/**
	 * Get the needed authorization credentials from the request.
	 *
	 * @return array
	 * @throws \Illuminate\Contracts\Container\BindingResolutionException
	 */
	public function getCredentials()
	{
		$username = $this->get('username');
		$password = $this->get('password');

		return [
			'username' => $username,
			'password' => $password
		];
	}

	public function validated($key = null, $default = null)
	{
		$validated = $this->validator->validated();
		return $validated;
	}
}
