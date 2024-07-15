<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variant_details extends Model
{
    use HasFactory;

    protected $table = 'variant_detail';

    protected $fillable = [
        'variantsId',
        'item_in',
        'item_out',
        'status'
    ];
}
