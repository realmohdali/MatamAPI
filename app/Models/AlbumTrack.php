<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlbumTrack extends Model
{
    use HasFactory;

    public function track()
    {
        return $this->hasOne('App\Models\Track', 'id', 'track_id')->with('artist')->with('year')->select('id', 'title', 'track_url', 'track_image', 'artist_id', 'year_id');
    }
}
