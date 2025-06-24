<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'terrain_id',
        'user_id',
        'rating',
        'comment',
    ];

    public function terrain()
    {
        return $this->belongsTo(Terrain::class, 'terrain_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}