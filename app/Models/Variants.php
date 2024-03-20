<?php

namespace App\Models;

use Hrshadhin\Userstamps\UserstampsTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variants extends Model
{
    use HasFactory, UserstampsTrait;

    protected $fillable = [
        'productId',
        'nama',
        'stock',
        'harga'
    ];
}
