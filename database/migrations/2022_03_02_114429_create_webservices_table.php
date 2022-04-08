<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebservicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webservices', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('link');
            $table->string('code');
            $table->string('status');
            $table->bigInteger('user_id')->unsigned()->index()->nullable();
            $table->timestamps();

 

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('webservices');
    }
}
