<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UiPage extends Model
{
    use HasFactory;
    protected $table = 'ui_page';
    protected $fillable = [
        'type',
        'text1',
        'text2',
        'foto1',
        'foto2',
        'foto3',
        'example',
    ];
}
