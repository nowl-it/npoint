<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professors extends Model
{
	use HasFactory;

	protected $table = 'professors'; // Tên bảng

	protected $fillable = [
		'full_name',
		'email',
		'department_id',
	];

	// Thiết lập mối quan hệ với Department
	public function departments()
	{
		return $this->belongsTo(Departments::class);
	}
}
