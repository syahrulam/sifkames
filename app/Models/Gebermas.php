<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gebermas extends Model
{
    use HasFactory;

    protected $table = 'gebermas';
    
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

