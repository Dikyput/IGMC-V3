<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerigmc2024Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playerigmc2024', function (Blueprint $table) {
            $table->id();
            $table->string('id_team')->unique()->default(null);
            $table->string('name');
            $table->string('name_team');
            $table->string('logo_team');
            $table->string('foto');
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
        Schema::dropIfExists('playerigmc2024');
    }
}
