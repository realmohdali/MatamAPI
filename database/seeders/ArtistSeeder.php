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
        $artist->name = "Farhan Ali";
        $artist->image = "https://i.imgur.com/MFzbiWG.jpg";
        $artist->nationality = "Pakistani";
        $artist->save();
    }
}