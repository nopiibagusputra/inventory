<?php

namespace App\Models;

use Hrshadhin\Userstamps\UserstampsTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
    use HasFactory, UserstampsTrait;

    protected $fillable = [
        'kode',
        'nama',
        'alamat',
        'nama_kontak',
        'telp'
    ];
}
