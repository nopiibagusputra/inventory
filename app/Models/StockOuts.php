<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockOuts extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_pemesanan',
        'userId',
        'variantId',
        'stock',
    ];
}
