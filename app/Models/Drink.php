<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'quantity',
        'price',
    ];

    public function menus()
    {
        return $this->hasMany(Menu::class);
    }
}
