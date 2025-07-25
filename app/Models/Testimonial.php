<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Testimonial extends Model
{
    use HasFactory;
     use SoftDeletes;

    public $timestamps = false;
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    // Jika kamu ingin mengisi data secara mass-assignment, declare fillable fields:
    protected $fillable = [
        'name',
        'position',
        'testimonial',
        'image',
        'status',
        'created_at',
        'updated_at',
    ];

}
