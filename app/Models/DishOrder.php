<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DishOrder extends Model
{
    use HasFactory;

    protected $table = 'dish_order';

    protected $fillable = [
        'dish_id',
        'order_id',
        'quantity_item',
    ];
}
