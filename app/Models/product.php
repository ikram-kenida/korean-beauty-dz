<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'price',
        'old_price',
        'old_price',
        'statut',
        'stock',
        'ingredient',
        'type_de_peau'
    ];
   public function category(){
       return $this->belongsTo(category::class);
    }
    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class);
    }
    public function comment(){
        return $this->hasMany(comment::class);
    }
    public function order()
    {
        return $this->belongsTo(order::class);
    }

}
