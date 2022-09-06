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
        Schema::create('renters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('app');
            $table->string('apm');
            $table->unsignedBigInteger('id_apartment');
            $table->date('arrival_date');
            $table->date('departure_date');
            $table->unsignedBigInteger('id_status_renter');
            $table->string('email');
            $table->timestamps();

            $table->foreign('id_apartment')->references('id')->on('cat_apartments');
            $table->foreign('id_status_renter')->references('id')->on('cat_status_renters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('renters');
    }
};
