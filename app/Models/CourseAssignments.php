<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseAssignments extends Model
{
	use HasFactory;

	protected $table = 'course_assignments'; // Tên bảng

	protected $fillable = [
		'course_id',
		'professor_id',
	];

	// Thiết lập mối quan hệ với Course
	public function courses()
	{
		return $this->belongsTo(Courses::class);
	}

	// Thiết lập mối quan hệ với Professor
	public function professors()
	{
		return $this->belongsTo(Professors::class);
	}
}
