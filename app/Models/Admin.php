<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as AuthenticatableUser;

class Admin extends AuthenticatableUser implements Authenticatable
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $table = 'admins';

    public function getAuthIdentifierName()
    {
        return 'id';
    }

    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    protected $hidden = [
        'password',
    ];
}
