<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalTournamen extends Model
{
    use HasFactory;
    protected $table = 'jadwal_tournamen';
    protected $fillable = [
        'status',
        'name_event',
        'jadwal',
        'pukul',
        'link_youtube',
        'foto',
    ];

}
