<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    protected $table = 'movies';
    protected $fillable = [
        'name', 
        'description',
        'trailer_url',
        'poster_url',
        'created_at',
        'updated_at'
    ];
}
