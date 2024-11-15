<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceRecords extends Model
{
	use HasFactory;

	protected $primaryKey = 'attendance_record_id';
	protected $fillable = ['class_subject_id', 'attendance_date', 'general_note'];

	public function classSubject()
	{
		return $this->belongsTo(ClassSubjects::class, 'class_subject_id', 'class_subject_id');
	}

	public function attendanceDetails()
	{
		return $this->hasMany(AttendanceDetails::class, 'attendance_record_id', 'attendance_record_id');
	}
}
