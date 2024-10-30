<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
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
			'email' => 'required|string|email:rfc,dns|max:255|unique:account,email',
			'password' => 'required|string|min:8',
			'confirm-password' => 'required|string|min:8|same:password',
		];
	}

	public function validated($key = null, $default = null)
	{
		$validated = $this->validator->validated();
		unset($validated['confirm-password']);
		return $validated;
	}
}
