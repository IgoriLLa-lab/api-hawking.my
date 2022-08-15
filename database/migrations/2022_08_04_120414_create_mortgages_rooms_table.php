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
        Schema::create('mortgages_rooms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('room_id')->references('id')->on('rooms');
            $table->foreignId('mortgage_id')->references('id')->on('mortgages');
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
        Schema::dropIfExists('mortgages_rooms');
    }
};
