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
        Schema::create('receipts', function (Blueprint $table) {
            $table->id();
            $table->string('month_covered');
            $table->string('folio');
            $table->float('amount_charged');
            $table->unsignedBigInteger('id_status_payment');
            $table->unsignedBigInteger('id_concept_payment');
            $table->timestamps();

            $table->foreign('id_status_payment')->references('id')->on('cat_status_payments');
            $table->foreign('id_concept_payment')->references('id')->on('cat_concept_payments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('receipts');
    }
};
