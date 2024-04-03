<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restocks extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_pemesanan',
        'productId',
        'variantId',
        'userId',
        'stock',
        'total_harga',
        'lead_time',
        'status',
        'notes'
    ];
}
