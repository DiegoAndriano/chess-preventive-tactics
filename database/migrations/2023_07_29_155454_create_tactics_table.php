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
            $table->integer('beaten')->default(0);
            $table->integer('won')->default(0);
            $table->integer('easy')->default(1);
            $table->integer('medium')->default(1);
            $table->integer('hard')->default(1);
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
