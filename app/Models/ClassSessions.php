<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassSessions extends Model
{
	use HasFactory;

	protected $primaryKey = 'session_id';
	protected $fillable = ['class_subject_id', 'session_date', 'hours'];

	public function classSubject()
	{
		return $this->belongsTo(ClassSubjects::class, 'class_subject_id', 'class_subject_id');
	}
}
