<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'image', 'content', 'slug','date','meta_tittle','meta_description','key_words'
    ];

    protected $dates = [
        'date',
    ];
}
