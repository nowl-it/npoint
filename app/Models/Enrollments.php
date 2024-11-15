<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollments extends Model
{
	use HasFactory;

	protected $primaryKey = 'enrollment_id';
	protected $fillable = ['student_id', 'class_id'];

	public function student()
	{
		return $this->belongsTo(Students::class, 'student_id', 'student_id');
	}

	public function class()
	{
		return $this->belongsTo(Classes::class, 'class_id', 'class_id');
	}
}
