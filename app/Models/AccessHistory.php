<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccessHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'thong_tin_dang_nhap',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
