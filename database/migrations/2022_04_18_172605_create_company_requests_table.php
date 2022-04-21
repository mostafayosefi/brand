<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_requests', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('tellir');
            $table->string('adresir');
            $table->string('codepir');
            $table->string('birthday');
            $table->string('reach')->nullable();
            $table->string('before')->nullable();
            $table->string('status')->comment('active , inactive , waiting  ')->default('active');
            $table->foreignId('user_id')->nullable()->unsigned()->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('company_plan_id')->nullable()->unsigned()->constrained('company_plans')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('company_type_id')->nullable()->unsigned()->constrained('company_types')->onDelete('cascade')->onUpdate('cascade');
            $table->string('toshow')->comment('unread , read')->default('unread');
            $table->string('fromshow')->comment('unread , read')->default('unread');
            $table->string('price')->nullable()->default('0');
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
        Schema::dropIfExists('company_requests');
    }
}
