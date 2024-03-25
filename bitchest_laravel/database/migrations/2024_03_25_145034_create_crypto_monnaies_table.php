<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCryptoMonnaiesTable extends Migration
{
    public function up()
    {
        Schema::create('crypto_monnaies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('symbol');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('crypto_monnaies');
    }
}