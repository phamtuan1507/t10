<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $primaryKey = 'movie_id';
    protected $fillable = [
        'title',
        'description',
        'release_year',
        'duration',
        'rating',
        'poster_url',
        'trailer_url',
    ];

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'movie_genres', 'movie_id', 'genre_id');
    }

    public function countries()
    {
        return $this->belongsToMany(Country::class, 'movie_countries', 'movie_id', 'country_id');
    }

    public function directors()
    {
        return $this->belongsToMany(Director::class, 'movie_directors', 'movie_id', 'director_id');
    }

    public function actors()
    {
        return $this->belongsToMany(Actor::class, 'movie_actors', 'movie_id', 'actor_id');
    }

    public function episodes()
    {
        return $this->hasMany(Episode::class, 'movie_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'movie_id');
    }

    public function videoSources()
    {
        return $this->hasMany(VideoSource::class, 'movie_id');
    }
}
