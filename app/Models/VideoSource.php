<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VideoSource extends Model
{
    protected $primaryKey = 'source_id';
    protected $fillable = ['movie_id', 'episode_id', 'quality', 'video_url'];

    public function movie()
    {
        return $this->belongsTo(Movie::class, 'movie_id');
    }

    public function episode()
    {
        return $this->belongsTo(Episode::class, 'episode_id');
    }
}
