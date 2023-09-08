<?php

namespace App\Models;

use App\Models\Dish;
use App\Models\User;
use App\Models\Order;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Restaurant extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'activity_name',
        'address',
        'partita_iva',
        'description',
        'user_id',

    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
    public function dishes()
    {
        return $this->hasMany(Dish::class);
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
