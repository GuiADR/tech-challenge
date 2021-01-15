<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStarringinmoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('starringinmovies', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('id_actor');
            $table->uuid('id_movie');
            $table->uuid('id_genre');
            $table->string('character');
            $table->timestamps();
        });

        Schema::table('starringinmovies', function (Blueprint $table) {
            $table->foreign('id_actor')->references('id')->on('actors')->onDelete('cascade');
            $table->foreign('id_movie')->references('id')->on('movies')->onDelete('cascade');
            $table->foreign('id_genre')->references('id')->on('genres')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('starringinmovies');
    }
}
