<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tin extends Model
{
    protected $table='tin';
    protected $primaryKey='idTin';
    protected $fillable = [
        'lang',
        'TieuDe',
        'TomTat',
        'urlHinh',
        'Ngay',
        'idUser',
        'Content',
        'idLT',      
        'idTL',
        'SoLanXem',
        'NoiBat',
        'AnHien',
        'tags',
        'Tin_KD'
    ];
}

