<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'products_id',
        'text'

    ];
   public function product(){
       return $this->belongsTo(product::class);
    }

}
