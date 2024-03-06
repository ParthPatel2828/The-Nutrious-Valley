<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bmi extends Model
{
    use HasFactory;

    protected $table = 'bmi'; 

    protected $fillable = [
        'name',
        'phone',
        'age',
        'weight',
        'height',
        'bmi_value',
        'bmi_category',
    ];
}
