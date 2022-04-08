<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNameserversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nameservers', function (Blueprint $table) {
            $table->id();
            $table->string('domain');
            $table->string('ns1')->nullable();
            $table->string('ns2')->nullable();
            $table->string('ns3')->nullable();
            $table->string('ns4')->nullable();
            $table->string('status')->comment('active , inactive , rezerve , waiting')->default('inactive');
            $table->foreignId('user_id')->nullable()->unsigned()->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('code')->nullable();
            $table->string('detail')->nullable();
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
        Schema::dropIfExists('nameservers');
    }
}
