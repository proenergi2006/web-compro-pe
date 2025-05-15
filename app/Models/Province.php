<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Province extends Model
{
    use HasFactory;
    use SoftDeletes;

    // Jika nama tabel kamu bukan 'provinces', definisikan manual:
    protected $table = 'provinces';
    public $timestamps = false;
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    // Jika kamu ingin mengisi data secara mass-assignment, declare fillable fields:
    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function vacancies(){
        return $this->hasMany(Vacancy::class);
    }
}
