<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_model_spare_spart', function (Blueprint $table) {
            $table->bigInteger('spare_spart_id')->unsigned();
            $table->bigInteger('car_model_id')->unsigned();

            $table
                ->foreign('spare_spart_id')
                ->references('id')
                ->on('spare_sparts')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table
                ->foreign('car_model_id')
                ->references('id')
                ->on('car_models')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_model_spare_spart');
    }
};
