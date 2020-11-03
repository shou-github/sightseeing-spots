<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spots extends Model
{
    protected $table = 'spots';

    protected $fillable =
    [
        'content'
    ];
    use HasFactory;
}
