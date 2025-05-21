<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vacancy extends Model
{
    use HasFactory;
    use SoftDeletes;

    // Jika nama tabel kamu bukan 'articles', definisikan manual:
    protected $table = 'vacancies';
    public $timestamps = false;
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'due_date' => 'date',

    ];

    // Jika kamu ingin mengisi data secara mass-assignment, declare fillable fields:
    protected $fillable = [
        'name',
        'id_dept',
        'id_prov',
        'title',
        'slug',
        'min_year',
        'status',
        'description',
        'employee_status',
        'requirement',
        'due_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function department(){
        return $this->belongsTo(Department::class, 'id_dept');
    }
    public function province(){
        return $this->belongsTo(Province::class, 'id_prov');
    }
    public function candidates()
    {
        return $this->hasMany(Candidate::class,'id_vacancy');
    }
}
