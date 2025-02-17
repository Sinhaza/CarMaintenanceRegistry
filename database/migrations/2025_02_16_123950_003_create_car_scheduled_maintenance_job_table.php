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
        Schema::create('car_scheduled_job', function (
            Blueprint $table
        ) {
            $table->bigInteger('scheduled_maintenance_job_id')->unsigned();
            $table->bigInteger('car_id')->unsigned();

            $table
                ->foreign('scheduled_maintenance_job_id')
                ->references('id')
                ->on('scheduled_maintenance_jobs')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table
                ->foreign('car_id')
                ->references('id')
                ->on('cars')
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
        Schema::dropIfExists('car_scheduled_maintenance_job');
    }
};
