<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonatedGoods extends Model
{
    protected $table = 'goods_donations';
    protected $fillable = [
        'user_id',
        'category',
        'description',
    ];

    protected $casts = [
        'created_at' => 'datetime',

    ];
}