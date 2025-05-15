<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    // Jika nama tabel kamu bukan 'articles', definisikan manual:
    protected $table = 'products';
    public $timestamps = false;
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    // Jika kamu ingin mengisi data secara mass-assignment, declare fillable fields:
    protected $fillable = [
        'name',
        'description',
        'image',
        'quote',
        'slug',
        'created_at',
        'updated_at',
    ];

}
