<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendances extends Model
{
	use HasFactory;

	protected $table = 'attendance'; // Tên bảng

	protected $fillable = [
		'enrollment_id',
		'attendance_date',
		'status',
	];

	// Thiết lập mối quan hệ với Enrollment
	public function enrollments()
	{
		return $this->belongsTo(Enrollments::class);
	}
}
