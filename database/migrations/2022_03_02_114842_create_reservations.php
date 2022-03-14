<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->date('res_date');
            $table->time('res_time');
            $table->string('res_people', 45);
        });

        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('res_name', 45);
            $table->string('res_email', 45);
            $table->string('res_phone', 45);
        });
        Schema::table('reservations', function (Blueprint $table) {
            $table->bigInteger('id_client')->unsigned();
            $table->foreign('id_client')->references('id')->on('clients');
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('reservations');
        Schema::dropIfExists('clients');
        Schema::enableForeignKeyConstraints();
    }
};
