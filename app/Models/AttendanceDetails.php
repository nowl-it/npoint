<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceDetails extends Model
{
	use HasFactory;

	protected $primaryKey = 'attendance_detail_id';
	protected $fillable = ['attendance_record_id', 'student_id', 'status', 'note'];

	public function attendanceRecord()
	{
		return $this->belongsTo(AttendanceRecords::class, 'attendance_record_id', 'attendance_record_id');
	}

	public function student()
	{
		return $this->belongsTo(Students::class, 'student_id', 'student_id');
	}
}
