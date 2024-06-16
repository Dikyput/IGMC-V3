<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = ['id_discord', 'artikel_id', 'content'];

    public function userdis()
    {
        return $this->belongsTo(UserDiscord::class, 'id_discord', 'id_discord');
    }

    public function artikel()
    {
        return $this->belongsTo(Artikel::class);
    }
}
