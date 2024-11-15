<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
	use HasFactory;

	protected $primaryKey = 'student_id';
	protected $fillable = ['first_name', 'last_name', 'birth_date', 'address', 'class_id'];

	public function class()
	{
		return $this->belongsTo(Classes::class, 'class_id', 'class_id');
	}

	public function enrollments()
	{
		return $this->hasMany(Enrollments::class, 'student_id', 'student_id');
	}

	public function attendanceDetails()
	{
		return $this->hasMany(AttendanceDetails::class, 'student_id', 'student_id');
	}
}
