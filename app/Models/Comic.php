<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'image', 'price', 'series', 'type', 'artists', 'writers'
    ];

    protected $casts = [
        "artists" => "array",
        "writers" => "array"
    ];
}
