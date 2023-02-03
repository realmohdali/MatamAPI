<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    use HasFactory;

    public function artist()
    {
        return $this->hasOne('App\Models\Artist', 'id', 'artist_id')->select('id', 'name', 'image');
    }

    public function year()
    {
        return $this->hasOne('App\Models\Year', 'id', 'year_id')->select('id', 'year_ad', 'year_hijri');
    }
}
