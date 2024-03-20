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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('writer');
            $table->string('title');
            $table->string('summary');
            $table->longText('content'); 
            $table->string('image_url')->nullable();
            $table->integer('hit')->default(0);
            $table->integer('like')->default(0);
            $table->integer('dislike')->default(0); 
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
        Schema::dropIfExists('blogs');
    }
};
