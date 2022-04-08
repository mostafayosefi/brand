<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscriptionordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discriptionorders', function (Blueprint $table) {
            $table->id();
            $table->string('by')->comment('admin , user  ')->default('admin');
            $table->string('operator');
            $table->string('text')->nullable();
            $table->string('flag')->nullable();
            $table->string('active')->nullable();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('discriptionorders');
    }
}
