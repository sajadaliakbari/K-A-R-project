<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $table = 'order';

    protected $fillable = [
        'product',
        'name',
        'last_name',
        'email',
        'contact_number',
        'quantity'
    ];
}
