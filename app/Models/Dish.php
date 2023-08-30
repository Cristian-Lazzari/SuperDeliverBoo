<?php

namespace App\Models;

use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dish extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function dish()
    {
        return $this->belongsTo(Restaurant::class);
    }
    public function orders()
    {
        return $this->belongsToMany('App\Models\Order');
    }
}
