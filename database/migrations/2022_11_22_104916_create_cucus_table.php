<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCucusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cucus', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('jk');

            $table->unsignedBigInteger('orangtua2_id');
            $table->foreign('orangtua2_id')->references('id')->on('anaks');
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
        Schema::dropIfExists('cucus');
    }
}
