<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRenewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('renews', function (Blueprint $table) {
            $table->id();
            $table->string('status')->comment('active , inactive , rezerve , waiting')->default('inactive');
            $table->string('renewendtime')->nullable();
            $table->string('price');
            $table->integer('years');
            $table->foreignId('domain_id')->nullable()->unsigned()->constrained('domains')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('user_id')->nullable()->unsigned()->constrained('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('renews');
    }
}
