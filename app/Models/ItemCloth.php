<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemCloth extends Model
{
    use HasFactory;
    protected $table = 'itemcloth';
    protected $fillable = [
        'id_cloth',
        'name',
        'img',
        'texture',
        'tipe',
        'drawable',
        'tier',
    ];
}
