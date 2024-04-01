<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restock extends Model
{
    use HasFactory;

    protected $fillable = [
        'productId',
        'variantId',
        'userId',
        'stock',
        'total_harga',
        'status',
        'notes'
    ];
}
