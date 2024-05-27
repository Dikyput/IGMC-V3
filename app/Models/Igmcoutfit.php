<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Igmcoutfit extends Model
{
    use HasFactory;
    protected $table = 'igmcoutfit';
    protected $primaryKey = 'id_discord';
    protected $fillable = [
        'id_discord',
        'data',
    ];

    public $timestamps = false;
}
