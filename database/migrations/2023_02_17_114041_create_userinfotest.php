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
        Schema::create('userinfotest', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('name',250);
            $table->string('email',250);
            $table->unsignedBigInteger('detail_id');
            $table->foreign('detail_id')->references('detail_id')->on('details');
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
        Schema::dropIfExists('userinfotest');
    }
};