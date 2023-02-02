<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('album_cover')->nullable();
            $table->foreignId('artist_id')->constrained('artists')->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->foreignId('year_id')->constrained('years')->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->boolean('featured')->default(false);
            $table->boolean('new_release')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('albums');
    }
}
