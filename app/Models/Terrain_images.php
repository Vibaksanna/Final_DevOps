<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terrain_images extends Model
{
    use HasFactory;

    protected $fillable = [
        'terrain_id',
        'image_path',
        'uploaded_at',
    ];

    public $timestamps = true;

    public function terrain()
    {
        return $this->belongsTo(Terrain::class, 'terrain_id');
    }
}