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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('city_id')->references('id')->on('cities');
            $table->foreignId('area_id')->references('id')->on('areas');
            $table->foreignId('street_id')->references('id')->on('streets');
            $table->foreignId('seller_id')->references('id')->on('sellers');//продавец
            $table->text('description');// описание
            $table->decimal('price');//начальная цена
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
        Schema::dropIfExists('rooms');
    }
};
