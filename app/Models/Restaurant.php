<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Restaurant extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function user()
    {
        return $this->hasOne(User::class);
    }

        public function categories() {
        return $this->belongsToMany(Category::class);
    }
}
