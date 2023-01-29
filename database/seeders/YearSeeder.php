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
        $year->year = "1444";
        $year->save();

        $year = new Year();
        $year->year = "1443";
        $year->save();
    }
}
