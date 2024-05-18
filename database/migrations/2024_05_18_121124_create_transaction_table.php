<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('id_saldo');
            $table->string('order_id')->unique();
            $table->decimal('nominal', 15, 2)->default(0.00);
            $table->integer('harga')->default(0);
            $table->integer('qty');
            $table->integer('total');
            $table->string('status');
            $table->string('snap_token')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id_discord')->on('user_discords')->onDelete('cascade');
            $table->foreign('id_saldo')->references('id_saldo')->on('listsaldo')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction');
    }
}
