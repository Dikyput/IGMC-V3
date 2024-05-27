<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemclothTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itemcloth', function (Blueprint $table) {
            $table->id();
            $table->string('id_cloth')->unique();
            $table->string('name');
            $table->string('img');
            $table->string('texture');
            $table->string('tipe');
            $table->string('drawable');
            $table->unsignedBigInteger('tier');
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
        Schema::dropIfExists('itemcloth');
    }
}
