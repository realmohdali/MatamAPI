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
            "Abbas Ka Alam Hai",
            "Gham E Hussain Dilam",
            "Hussain Tere Lahu Ki Khushbo",
            "Kaisay Main Dafnaon Sakina",
            "Abbas Ka Nar",
            "Saat Qadam",
            "Sada Rahay Ga Hussain Hussain",
            "Shaam E Ghareeban Aye",
            "Ujar Gaye Aj Sani e Zahra",
        ];

        $track_url = [
            "matam.syedmohdali.com/matam/nadeem_sarwar/1444/Abbas Ka Alam Hai.mp3",
            "matam.syedmohdali.com/matam/nadeem_sarwar/1444/Gham E Hussain Dilam.mp3",
            "matam.syedmohdali.com/matam/nadeem_sarwar/1444/Hussain Tere Lahu Ki Khushbo.mp3",
            "matam.syedmohdali.com/matam/nadeem_sarwar/1444/Kaisay Main Dafnaon Sakina.mp3",
            "matam.syedmohdali.com/matam/nadeem_sarwar/1444/Abbas Ka Nara.mp3",
            "matam.syedmohdali.com/matam/nadeem_sarwar/1444/Saat Qadam.mp3",
            "matam.syedmohdali.com/matam/nadeem_sarwar/1444/Sada Rahay Ga Hussain Hussain.mp3",
            "matam.syedmohdali.com/matam/nadeem_sarwar/1444/Shaam E Ghareeban Aye.mp3",
            "matam.syedmohdali.com/matam/nadeem_sarwar/1444/Ujar Gaye Aj Sani e Zahra.mp3",
        ];

        $years = [
            1, 1, 1, 1, 1, 1, 1, 1, 1
        ];

        for($i = 0; $i < sizeof($title); $i++) {
            $track = new Track();
            $track->title = $title[$i];
            $track->artist_id = 1;
            $track->year_id = $years[$i];
            $track->track_url = $track_url[$i];
            $track->save();
        }
    }
}
