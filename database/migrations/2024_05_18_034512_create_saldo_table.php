<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaldoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saldo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_discord')->nullable();
            $table->decimal('nominal', 15, 2)->default(0.00);
            $table->timestamps();

            $table->foreign('id_discord')->references('id_discord')->on('user_discords')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('saldo');
    }
}
