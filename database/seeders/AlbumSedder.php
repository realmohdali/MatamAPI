<?php

namespace Database\Seeders;

use App\Models\Album;
use Illuminate\Database\Seeder;

class AlbumSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $album = new Album();
        $album->name = "Hazrat Imam Hussain";
        $album->artist_id = 1;
        $album->year_id = 1;
        $album->save();

        $album = new Album();
        $album->name = "Syed Badshah";
        $album->artist_id = 1;
        $album->year_id = 2;
        $album->save();
    }
}
