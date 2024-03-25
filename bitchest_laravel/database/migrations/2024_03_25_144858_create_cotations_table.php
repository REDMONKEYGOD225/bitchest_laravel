<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCotationsTable extends Migration
{
    public function up()
    {
        Schema::create('cotations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('crypto_id');
            $table->float('count');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cotations');
    }
}
