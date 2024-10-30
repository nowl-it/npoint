<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
	use HasFactory;

	protected $table = 'departments'; // Tên bảng

	protected $fillable = [
		'department_name',
		'faculty',
	];

	// Thiết lập mối quan hệ với Professor
	public function professors()
	{
		return $this->hasMany(Professors::class);
	}
}
