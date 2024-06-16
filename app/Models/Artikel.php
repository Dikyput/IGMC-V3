<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Artikel extends Model
{
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($artikel) {
            $artikel->slug = Str::slug($artikel->slug);
        });

        static::updating(function ($artikel) {
            $artikel->slug = Str::slug($artikel->slug);
        });
    }

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->locale('en')->translatedFormat('d F Y') . "  " . Carbon::parse($value)->format('H:i') . ' WIB';
    }
    use HasFactory;
    protected $table = 'artikel';
    protected $fillable = [
        'slug',
        'deskripsi',
        'foto',
        'published',
        'category_id',
        'categori',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}
