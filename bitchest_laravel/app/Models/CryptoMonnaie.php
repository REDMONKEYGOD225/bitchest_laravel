<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CryptoMonnaie extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_crypto', 'name', 'symbol',
    ];
}
