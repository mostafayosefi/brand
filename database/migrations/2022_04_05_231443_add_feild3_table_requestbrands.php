<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFeild3TableRequestbrands extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('requestbrands', function (Blueprint $table) {
            $table->string('price')->nullable()->default('0');
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
            $table->dropColumn('price');
        });
    }
}
