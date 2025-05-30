<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;
    protected $fillable = [
    'id_vacancy','name', 'email', 'location', 'education', 'major', 'experience', 'cv_path','phone','created_at',
    'updated_at',
    ];

    public $timestamps = false;
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    public function vacancy()
    {
        return $this->belongsTo(Vacancy::class, 'id_vacancy');
    }
}
