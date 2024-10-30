<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
	use HasFactory;

	protected $table = 'students'; // Tên bảng

	protected $fillable = [
		'full_name',
		'dob',
	];

	// Thiết lập mối quan hệ với Enrollment
	public function enrollments()
	{
		return $this->hasMany(Enrollments::class);
	}
}
