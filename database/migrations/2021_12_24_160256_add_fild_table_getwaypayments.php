<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFildTableGetwaypayments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('getwaypayments', function (Blueprint $table) {
            $table->string('status')->after('setting_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('getwaypayments', function (Blueprint $table) {

            $table->dropColumn('status');
        });
    }
}
