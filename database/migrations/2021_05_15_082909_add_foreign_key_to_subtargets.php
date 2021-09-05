<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToSubtargets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('subtargets', function (Blueprint $table) {
            $table->foreign('workgroup_id')->references('id')->on('workgroups')->onDelete('cascade');
            $table->foreign('individual_target_id')->references('id')->on('individual_targets')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subtargets', function (Blueprint $table) {
            $table->dropForeign('workgroup_id');
            $table->dropForeign('individual_target_id');
        });
    }
}
