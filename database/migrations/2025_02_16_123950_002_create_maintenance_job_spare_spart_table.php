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
        Schema::create('maintenance_job_spare_spart', function (
            Blueprint $table
        ) {
            $table->bigInteger('maintenance_job_id')->unsigned();
            $table->bigInteger('spare_spart_id')->unsigned();

            $table
                ->foreign('maintenance_job_id')
                ->references('id')
                ->on('maintenance_jobs')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table
                ->foreign('spare_spart_id')
                ->references('id')
                ->on('spare_sparts')
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
        Schema::dropIfExists('maintenance_job_spare_spart');
    }
};
