<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class thumbnail extends Model
{
    use HasFactory;
    protected $fillable = [
        'main_img',
        'img_2',
        'img_3',
        'phone_img',


    ];

}
