<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gebermas extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'content', 'image', 'date'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
