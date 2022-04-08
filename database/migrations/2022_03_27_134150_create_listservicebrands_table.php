<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListservicebrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listservicebrands', function (Blueprint $table) {
            $table->id();
            $table->integer('show')->nullable();
            $table->foreignId('requestbrand_id')->nullable()->unsigned()->constrained('requestbrands')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('servicebrand_id')->nullable()->unsigned()->constrained('servicebrands')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('listservicebrands');
    }
}
