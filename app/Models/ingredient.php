<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ingredient extends Model
{
    protected $fillable = [
        'title',
        'image',
        'description',
        'combo1',
        'combo2',
        'combo3',
        'combo4',
        'combo5',
    ];

    use HasFactory;
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }


}
