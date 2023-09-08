<?php

namespace App\Models;

use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    public function dishes()
    {
        return $this->belongsToMany('App\Models\Dish');
    }
    public function order()
    {
        return $this->belongsTo(Restaurant::class);
    }
}
