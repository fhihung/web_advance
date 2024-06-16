<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'food_id',
        'drink_id',
        'description',
        'price',
    ];

    public function food()
    {
        return $this->belongsTo(Food::class);
    }

    public function drink()
    {
        return $this->belongsTo(Drink::class);
    }
}
