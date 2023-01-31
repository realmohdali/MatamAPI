<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Track;

class TrackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $title = [
            "Aey Neher E Alqama",
            "Alam Bardar",
            "Chalta Rahe Karwan",
            "Hazrat Imam Hussain AS",
            "Abbas Ka Nar",
            "Kya Pata Zindagi Ka",
            "Main Zainab Hoon (Saraiki)",
            "Mazar E Fatima",
            "Syed Badshah",
            "Zahra Jo Pyaro (Sindhi)"
        ];

        $track_url = [
            "matam.syedmohdali.com/matam/nadeem_sarwar/1444/Aey Neher E Alqama.mp3",
            "matam.syedmohdali.com/matam/nadeem_sarwar/1444/Alam Bardar.mp3",
            "matam.syedmohdali.com/matam/nadeem_sarwar/1444/Chalta Rahe Karwan.mp3",
            "matam.syedmohdali.com/matam/nadeem_sarwar/1444/Hazrat Imam Hussain AS.mp3",
            "matam.syedmohdali.com/matam/nadeem_sarwar/1444/Abbas Ka Nara.mp3",
            "matam.syedmohdali.com/matam/nadeem_sarwar/1444/Kya Pata Zindagi Ka.mp3",
            "matam.syedmohdali.com/matam/nadeem_sarwar/1444/Main Zainab Hoon (Saraiki).mp3",
            "matam.syedmohdali.com/matam/nadeem_sarwar/1444/Mazar E Fatima.mp3",
            "matam.syedmohdali.com/matam/nadeem_sarwar/1444/Syed Badshah.mp3",
            "matam.syedmohdali.com/matam/nadeem_sarwar/1444/Zahra Jo Pyaro (Sindhi).mp3"
        ];

        $years = [
            1, 1, 1, 1, 2, 2, 2, 2, 2, 2
        ];

        for($i = 0; $i < 10; $i++) {
            $track = new Track();
            $track->title = $title[$i];
            $track->artist_id = 1;
            $track->year_id = $years[$i];
            $track->album_id = $years[$i];
            $track->track_url = $track_url[$i];
            $track->save();
        }
    }
}
