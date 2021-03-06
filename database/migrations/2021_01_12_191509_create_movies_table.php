<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->integer('year');
            $table->text('synopsis');
            $table->integer('runtime');
            $table->date('released_at');
            $table->integer('cost');
            $table->string('id_genre');
            $table->timestamps();
        });
        Schema::table('movies', function (Blueprint $table) {
            $table->foreign('id_genre')->references('id')->on('genres');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
