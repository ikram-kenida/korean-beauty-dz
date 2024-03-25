<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable = [
        'title',
        'thumbnail'

    ];
    use HasFactory;
    public function product(){
        return $this->hasMany(product::class);
     }
}
