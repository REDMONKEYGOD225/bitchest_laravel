<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellsTable extends Migration
{
    public function up()
    {
        Schema::create('sells', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('crypto_id')->constrained()->onDelete('cascade');
            $table->float('quantity');
            $table->float('price');
            $table->date('sell_date');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sells');
    }
}
