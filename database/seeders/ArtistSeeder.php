<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Artist;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $artist = new Artist();
        $artist->name = "Nadeem Sarwar";
        $artist->image = "https://yt3.ggpht.com/ytc/AMLnZu_QJwZnjWAk10Wn9Yhq-xcNth3Pn0TT4WbxwDL3SA=s900-c-k-c0x00ffffff-no-rj";
        $artist->nationality = "Pakistani";
        $artist->save();
    }
}
