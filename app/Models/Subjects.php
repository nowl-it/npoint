<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
	use HasFactory;

	protected $primaryKey = 'subject_id';
	protected $fillable = ['subject_name', 'description'];

	public function classSubjects()
	{
		return $this->hasMany(ClassSubjects::class, 'subject_id', 'subject_id');
	}
}
