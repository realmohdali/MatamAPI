<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Year;

class YearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $year = new Year();
        $year->year_ad = "2022";
        $year->year_hijri = "1444";
        $year->save();

        $year = new Year();
        $year->year_ad = "2021";
        $year->year_hijri = "1443";
        $year->save();
    }
}
