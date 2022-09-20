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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_renter');
            $table->unsignedBigInteger('id_status_report');
            $table->text('comments');
            $table->timestamps();
            $table->foreign('id_renter')->references('id')->on('renters');
            $table->foreign('id_status_report')->references('id')->on('cat_status_reports');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reports');
    }
};
