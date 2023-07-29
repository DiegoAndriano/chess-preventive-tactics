<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tactics', function (Blueprint $table) {
            $table->id();
            $table->text('pgn');
            $table->string('answer');
            $table->string('option_one');
            $table->string('option_two');
            $table->string('option_three')->nullable();
            $table->integer('beaten')->nullable();
            $table->integer('won')->nullable();
            $table->integer('likes')->nullable();
            $table->integer('dislikes')->nullable();
            $table->string('description')->nullable();
            $table->string('author')->nullable();
            $table->foreignId('user_id')->nullable();
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
        Schema::dropIfExists('tactics');
    }
};
