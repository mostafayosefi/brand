<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckdomainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkdomains', function (Blueprint $table) {
            $table->id();
            $table->string('domain');
            $table->string('price');
            $table->string('riyal')->nullable();
            $table->string('type');
            $table->foreignId('webservice_id')->constrained('webservices')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('checkdomains');
    }
}
