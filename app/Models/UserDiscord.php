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
        'avatar',
        'locale',
        'activated',
        'isVerified',
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
    public function tokendiscord()
    {
        return $this->belongsTo(Saldo::class, 'id_discord', 'id_discord');
    }

    public function getRouteKeyName()
    {
        return 'id_discord';
    }

    public function discord()
    {
        return $this->hasOne(UserDiscord::class, 'id_discord', 'id_discord');
    }

    public function getAvatarUrl()
    {
        return $this->avatar ? "https://cdn.discordapp.com/avatars/{$this->id_discord}/{$this->avatar}.png" : 'https://cdn.discordapp.com/embed/avatars/0.png';
    }
}
