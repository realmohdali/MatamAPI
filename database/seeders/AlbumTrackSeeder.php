<?php

namespace Database\Seeders;

use App\Models\AlbumTrack;
use Illuminate\Database\Seeder;

class AlbumTrackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $years = [
        //     1, 1, 1, 1, 2, 2, 2, 2, 2, 2
        // ];

        // for ($i = 0; $i < count($years); $i++) {
        //     $album_track = new AlbumTrack();
        //     $album_track->track_id = ($i+1);
        //     $album_track->album_id = $years[$i];
        //     $album_track->save();
        // }

        for($i = 11; $i <= 19; $i++) {
            $album_track = new AlbumTrack();
            $album_track->track_id = $i;
            $album_track->album_id = 3;
            $album_track->save();
        }
    }
}
