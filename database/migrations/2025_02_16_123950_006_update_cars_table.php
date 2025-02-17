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
        Schema::table('cars', function (Blueprint $table) {
            $table
                ->bigInteger('car_model_id')
                ->unsigned()
                ->after('id');
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
        Schema::table('cars', function (Blueprint $table) {
            $table->dropColumn('car_model_id');
            $table->dropForeign('cars_car_model_id_foreign');
        });
    }
};
