<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubcategorybrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcategorybrands', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->mediumText('text')->nullable();
            $table->string('url');
            $table->string('status')->comment('active , inactive  ')->default('active');
            $table->foreignId('categorybrand_id')->nullable()->unsigned()->constrained('categorybrands')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subcategorybrands');
    }
}
