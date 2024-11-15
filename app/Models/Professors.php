<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professors extends Model
{
	use HasFactory;

	protected $primaryKey = 'professor_id';

	protected $fillable = [
		'account_id',
		'first_name',
		'last_name',
		'email',
		'phone',
		'photo',
		'birth_date',
		'address',
		'created_at',
		'updated_at'
	];

	public function account()
	{
		return $this->belongsTo(Accounts::class, 'account_id', 'account_id');
	}

	public function classSubjects()
	{
		return $this->hasMany(ClassSubjects::class, 'professor_id', 'professor_id');
	}

	public function totalTeachingHours()
	{
		$totalHours = ClassSubjects::query()
			->join('schedules', 'class_subjects.class_subject_id', '=', 'schedules.class_subject_id')
			->where('class_subjects.professor_id', $this->professor_id)
			->selectRaw("SUM(TIMESTAMPDIFF(HOUR, schedules.start_time, schedules.end_time)) as total_hours")
			->value('total_hours');

		return $totalHours ?? 0;
	}

	public function totalWasTeachingHoursThisMonth()
	{
		$startOfMonth = Carbon::now()->startOfMonth()->toDateString();
		$endOfMonth = Carbon::now()->endOfMonth()->toDateString();

		$totalHours = AttendanceRecords::query()
			->join('class_subjects', 'attendance_records.class_subject_id', '=', 'class_subjects.class_subject_id')
			->join('schedules', function ($join) {
				$join->on('attendance_records.class_subject_id', '=', 'schedules.class_subject_id')
					->on('attendance_records.attendance_date', '=', 'schedules.date');
			})
			->where('class_subjects.professor_id', $this->professor_id)
			->whereBetween('attendance_records.attendance_date', [$startOfMonth, $endOfMonth])
			->selectRaw("SUM(TIMESTAMPDIFF(HOUR, schedules.start_time, schedules.end_time)) as total_hours")
			->value('total_hours');

		return $totalHours ?? 0;
	}
}
