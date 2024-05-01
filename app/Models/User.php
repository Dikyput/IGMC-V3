<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $primaryKey = 'id_discord';

    protected $fillable = [
        'id_discord',
        'username',
        'email',
        'token_newplayer',
        'test',
    ];

    // public function iddiscord2()
    // {
    //     return $this->belongsTo(UserDiscord::class, 'id_discord');
    // }

    /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var boolean
     */
    public $incrementing = false;
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
