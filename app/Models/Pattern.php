<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pattern extends Model
{
    use HasFactory;
    protected $table = 'pattern';
    protected $fillable = [
        'image',
        'name',
        'description',
        
    ];
}
