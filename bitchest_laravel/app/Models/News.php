<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'content',
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    // Mutateur pour la date de publication
    public function setPublishedAtAttribute($value)
    {
        $this->attributes['published_at'] = $value ?: Carbon::now();
    }
}