<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class listsaldo extends Model
{
    use HasFactory;
    protected $table = 'listsaldo';
    protected $fillable = [
        'id_saldo',
        'nominal',
        'harga',
    ];
}
