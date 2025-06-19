<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    protected $primaryKey = 'episode_id';
    protected $fillable = ['movie_id', 'season', 'episode_number', 'title', 'duration', 'video_url', 'subtitle_url', 'dub_url', 'release_date'];

    public function movie()
    {
        return $this->belongsTo(Movie::class, 'movie_id');
    }
}
