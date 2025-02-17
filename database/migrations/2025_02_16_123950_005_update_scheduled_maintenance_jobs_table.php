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
        Schema::table('scheduled_maintenance_jobs', function (
            Blueprint $table
        ) {
            $table
                ->bigInteger('maintenance_job_id')
                ->unsigned()
                ->after('time_slot_id');
            $table
                ->foreign('maintenance_job_id')
                ->references('id')
                ->on('maintenance_jobs')
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
        Schema::table('scheduled_maintenance_jobs', function (
            Blueprint $table
        ) {
            $table->dropColumn('maintenance_job_id');
            $table->dropForeign(
                'scheduled_maintenance_jobs_maintenance_job_id_foreign'
            );
        });
    }
};
