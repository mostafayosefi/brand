<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFeild3TableDiscriptionorders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('discriptionorders', function (Blueprint $table) {
            $table->integer('requestbrand_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('discriptionorders', function (Blueprint $table) {
            $table->dropColumn('requestbrand_id');
        });
    }
}
