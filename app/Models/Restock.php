<?php

namespace App\Models;

use Hrshadhin\Userstamps\UserstampsTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restock extends Model
{
    use HasFactory, UserstampsTrait;

    protected $fillable = [
        'productId',
        'variantId',
        'userId',
        'stock',
        'total_harga'
    ];
}
