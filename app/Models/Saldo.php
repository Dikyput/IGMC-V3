<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saldo extends Model
{
    use HasFactory;
    protected $table = 'saldo';
    protected $fillable = [
        'id_discord',
        'nominal',
    ];

    public function userDiscord()
    {
        return $this->belongsTo(UserDiscord::class, 'id_discord', 'id_discord');
    }
}
