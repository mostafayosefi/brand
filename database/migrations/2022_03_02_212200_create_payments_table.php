<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();

             $table->string('type')->comment('online , offline  , depo ')->default('offline');
            $table->string('status')->comment('active , deactive  , waiting ')->default('waiting');
            $table->string('textUser')->nullable();
            $table->string('textAdmin')->nullable();
            $table->integer('order_id')->nullable();
            $table->integer('renew_id')->nullable();
            $table->integer('transfer_id')->nullable();

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
        Schema::dropIfExists('payments');
    }
}
