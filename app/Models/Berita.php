<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'berita';

    // Tambahkan 'video_url' ke dalam array ini
    protected $fillable = [
        'judul',
        'slug',
        'konten',
        'gambar',
        'user_id',
        'video_url', 
    ];

    /**
     * Berita belongs to a User (author).
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}