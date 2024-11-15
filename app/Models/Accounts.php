<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Accounts extends Authenticatable
{
	use HasFactory, HasApiTokens, Notifiable;

	protected $primaryKey = 'account_id';

	protected $fillable =
	['username', 'password', 'role', 'remember_token', 'created_at', 'updated_at'];

	protected $hidden = [
		'password',
		'remember_token',
	];

	public function professors()
	{
		return $this->hasOne(Professors::class, 'account_id', 'account_id');
	}

	public function isAdmin()
	{
		return $this->role === 'admin';
	}
}
