<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
	use HasFactory;

	protected $table = 'courses'; // Tên bảng

	protected $fillable = [
		'course_name',
		'department_id',
	];

	// Thiết lập mối quan hệ với Department
	public function departments()
	{
		return $this->belongsTo(Departments::class);
	}

	// Thiết lập mối quan hệ với Enrollment
	public function enrollments()
	{
		return $this->hasMany(Enrollments::class);
	}
}
