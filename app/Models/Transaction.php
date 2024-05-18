<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $table = 'transaction';
    protected $fillable = [
        'user_id',
        'id_saldo',
        'order_id',
        'nominal',
        'harga',
        'qty',
        'total',
        'status',
        'snap_token',
    ];
}
