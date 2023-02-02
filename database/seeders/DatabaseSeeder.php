<?php

namespace Database\Seeders;

use App\Models\AlbumTrack;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(
            [AlbumTrackSeeder::class]
        );
    }
}
