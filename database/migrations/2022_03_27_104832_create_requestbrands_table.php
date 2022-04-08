<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestbrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requestbrands', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('tellir');
            $table->string('adresir');
            $table->string('codepir');
            $table->string('tellin')->nullable();
            $table->string('adresin')->nullable();
            $table->string('codepin')->nullable();
            $table->string('birthday');
            $table->string('reach')->nullable();
            $table->string('before')->nullable();
            $table->string('status')->comment('active , inactive , waiting  ')->default('active');
            $table->foreignId('user_id')->nullable()->unsigned()->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('subcategorybrand_id')->nullable()->unsigned()->constrained('subcategorybrands')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('requestbrands');
    }
}
