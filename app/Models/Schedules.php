<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedules extends Model
{
	use HasFactory;

	protected $primaryKey = 'schedule_id';
	protected $fillable = ['professor_id', 'class_subject_id', 'date', 'start_time', 'end_time', 'location', 'note'];

	public function professor()
	{
		return $this->belongsTo(Professors::class, 'professor_id', 'professor_id');
	}

	public function classSubject()
	{
		return $this->belongsTo(ClassSubjects::class, 'class_subject_id', 'class_subject_id');
	}
}
