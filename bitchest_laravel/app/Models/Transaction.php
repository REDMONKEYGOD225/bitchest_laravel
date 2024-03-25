<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_crypto', 'date', 'price', 'type_crypto', 'count_crypto', 'quantity',
    ];
}
