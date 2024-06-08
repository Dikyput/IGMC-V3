<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayerIgmc2024 extends Model
{
    use HasFactory;
    protected $table = 'playerigmc2024';
    protected $fillable = [
        'name',
        'name_team',
        'logo_team',
        'foto',
        'id_team',
    ];
}
