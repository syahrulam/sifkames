<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SarFkam extends Model
{
    use HasFactory;

    protected $table = 'sarfkam';
    
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

