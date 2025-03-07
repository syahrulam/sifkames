<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dakwah extends Model
{
    use HasFactory;

    protected $table = 'dakwah';
    
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
