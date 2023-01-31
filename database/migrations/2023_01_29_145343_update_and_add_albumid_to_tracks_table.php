<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateAndAddAlbumidToTracksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tracks', function (Blueprint $table) {
            $table->foreignId('album_id')->after('year_id')->constrained('albums')->onUpdate('cascade')->onDelete('cascade')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tracks', function (Blueprint $table) {
            $table->dropConstrainedForeignId('album_id');
        });
    }
}
