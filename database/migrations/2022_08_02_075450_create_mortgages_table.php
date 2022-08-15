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
        Schema::create('mortgages', function (Blueprint $table) {
            $table->id();
            $table->string('bank_name'); //название банка
            $table->string('bank_logo');//лого банка
            $table->decimal('down_payment');//Первоначальный взнос
            $table->integer('term');//Срок кредитования
            $table->decimal('rate');//Ставка
            $table->decimal('sum');//Кредит
            $table->decimal('payment_month');//Ежемесячный платеж
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
        Schema::dropIfExists('mortgages');
    }
};
