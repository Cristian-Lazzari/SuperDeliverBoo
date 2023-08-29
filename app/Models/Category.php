<?php

namespace App\Models;

use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;


    public $timestamps = false;

    public function restaurants()
    {
        return $this->belongsToMany(Restaurant::class, 'category_restaurant', 'category_id', 'restaurant_id');
    }
}
