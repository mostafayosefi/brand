<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestbrandListSubcategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requestbrand_list_subcategories', function (Blueprint $table) {
            $table->id();
            $table->integer('show')->nullable();
            $table->foreignId('requestbrand_id')->nullable()->unsigned()->constrained('requestbrands')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('subcategorybrand_id')->nullable()->unsigned()->constrained('subcategorybrands')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('requestbrand_list_subcategories');
    }
}
