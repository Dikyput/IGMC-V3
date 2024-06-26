<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Userdiscord extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_discords', function (Blueprint $table) {
            $table->id('id_discord');
            $table->string('username');
            $table->string('avatar')->nullable();
            $table->string('locale');
            $table->integer('isVerified')->default(0);
            $table->boolean('activated')->default(0);
            $table->boolean('mfa_enabled');
            $table->string('refresh_token')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('user_discords');
    }
}
