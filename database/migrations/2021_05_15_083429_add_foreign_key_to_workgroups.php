<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToWorkgroups extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('workgroups', function (Blueprint $table) {
            $table->foreign('individual_target_id')->references('id')->on('individual_targets')->onDelete('cascade');
            $table->foreign('target_id')->references('id')->on('targets')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('workgroups', function (Blueprint $table) {
            $table->dropForeign('individual_target_id');
            $table->dropForeign('target_id');
        });
    }
}
