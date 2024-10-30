<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollments extends Model
{
	use HasFactory;

	protected $table = 'enrollments'; // Tên bảng

	protected $fillable = [
		'student_id',
		'course_id',
	];

	// Thiết lập mối quan hệ với Student
	public function students()
	{
		return $this->belongsTo(Students::class);
	}

	// Thiết lập mối quan hệ với Course
	public function courses()
	{
		return $this->belongsTo(Courses::class);
	}

	// Thiết lập mối quan hệ với Attendance
	public function attendances()
	{
		return $this->hasMany(Attendances::class);
	}
}
