<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassSubjects extends Model
{
	use HasFactory;

	protected $primaryKey = 'class_subject_id';
	protected $fillable = ['class_id', 'subject_id', 'professor_id', 'start_date', 'end_date', 'hours_per_session'];

	public function class()
	{
		return $this->belongsTo(Classes::class, 'class_id', 'class_id');
	}

	public function subject()
	{
		return $this->belongsTo(Subjects::class, 'subject_id', 'subject_id');
	}

	public function professor()
	{
		return $this->belongsTo(Professors::class, 'professor_id', 'professor_id');
	}

	public function attendanceRecords()
	{
		return $this->hasMany(AttendanceRecords::class, 'class_subject_id', 'class_subject_id');
	}

	public function sessions()
	{
		return $this->hasMany(ClassSessions::class, 'class_subject_id', 'class_subject_id');
	}

	public function totalSessions()
	{
		return $this->sessions()->count(); // Tổng số buổi học
	}

	public function totalHours()
	{
		return $this->sessions()->sum('hours'); // Tổng số giờ học
	}
}
