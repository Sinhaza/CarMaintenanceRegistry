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
        Schema::table('spare_sparts', function (Blueprint $table) {
            $table->integer('amount')->after('part_id');
            $table
                ->bigInteger('part_id')
                ->nullable()
                ->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('spare_sparts', function (Blueprint $table) {
            $table->dropColumn('amount');
            $table->bigInteger('part_id')->change();
        });
    }
};
