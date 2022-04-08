<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFeild1TableRequestbrands extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('requestbrands', function (Blueprint $table) {

            $table->string('toshow')->comment('unread , read')->default('unread')->after('status');
            $table->string('fromshow')->comment('unread , read')->default('unread')->after('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('requestbrands', function (Blueprint $table) {
            //
        });
    }
}
