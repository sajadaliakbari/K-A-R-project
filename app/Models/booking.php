<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    protected $table = 'booking';

    protected $fillable = [
        'name',
        'last_name',
        'email',
        'contact_number',
        'size',
        'color',
        'pattern',
        'cloth',
        'quantity'
    ];
}
