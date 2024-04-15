<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDiscord extends Model implements Authenticatable
{
    use HasFactory, AuthenticatableTrait;
    protected $primaryKey = 'id_discord';
    protected $fillable = [
        'id_discord',
        'username',
        'email',
        'avatar',
        'verified',
        'locale',
        'mfa_enabled',
        'refresh_token',
    ];

    protected $hidden = [
        'refresh_token',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function iddiscord()
    {
        return $this->belongsTo(User::class, 'id_discord', 'id_discord');
    }

    public function getRouteKeyName()
    {
        return 'id_discord';
    }
}
