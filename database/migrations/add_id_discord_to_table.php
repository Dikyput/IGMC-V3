<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIsActivatedToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('igmcoutfit', function (Blueprint $table) {
            $table->unsignedBigInteger('id_discord')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('igmcoutfit', function (Blueprint $table) {
            $table->unsignedBigInteger('id_discord')->nullable();
        });
    }
}
