<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFeildTableMngfinicals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mngfinicals', function (Blueprint $table) {
            $table->string('priceplan')->nullable()->after('rateusd');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mngfinicals', function (Blueprint $table) {
            $table->dropColumn('priceplan');
        });
    }
}
