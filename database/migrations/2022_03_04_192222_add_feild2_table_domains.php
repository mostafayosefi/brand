<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFeild2TableDomains extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('domains', function (Blueprint $table) {
            $table->integer('years')->default('1')->after('user_id');
            $table->integer('renew')->default('0')->comment('0 is dont renew , 1 is renew')->after('user_id');
            $table->string('private')->default('private_off')->comment('private_off is noprivate , private_on is private')->after('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('domains', function (Blueprint $table) {
            $table->dropColumn('years');
            $table->dropColumn('renew');
            $table->dropColumn('private');
        });
    }
}
