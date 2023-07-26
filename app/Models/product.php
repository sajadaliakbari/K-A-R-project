<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable =['Name','Description','category_id','stock_availability','size1','size2','size3','size4','size5','color1','color2','color3','color4','Price','Image1','Image2','Image3'];
}
