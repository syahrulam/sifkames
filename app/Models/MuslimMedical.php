<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MuslimMedical extends Model
{
    use HasFactory;

    protected $table = 'muslim_medical'; // Nama tabel dalam database

    protected $fillable = [
        'title',
        'slug',
        'content',
        'image',
        'date',
        'category',
        'admin',
    ];
}
