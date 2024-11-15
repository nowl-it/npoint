<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceNotes extends Model
{
	use HasFactory;

	protected $primaryKey = 'note_id';
	protected $fillable = ['attendance_detail_id', 'note'];

	public function attendanceDetail()
	{
		return $this->belongsTo(AttendanceDetails::class, 'attendance_detail_id', 'attendance_detail_id');
	}
}
