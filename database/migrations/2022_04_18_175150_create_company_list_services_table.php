<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyListServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_list_services', function (Blueprint $table) {
            $table->id();
            $table->integer('show')->nullable();
            $table->foreignId('company_request_id')->nullable()->unsigned()->constrained('company_requests')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('company_service_id')->nullable()->unsigned()->constrained('company_services')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('company_list_services');
    }
}
