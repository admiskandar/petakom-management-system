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
        Schema::create('proposals', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('objective');
            $table->string('organizer');
            $table->date('start_date');
            $table->date('end_date');
            $table->time('start_time');
            $table->time('end_time');
            $table->string('location');
            $table->integer('participation');
            $table->decimal('budget');
            $table->integer('status');
            $table->integer('generate');
            $table->unsignedBigInteger('user_id');//foreign key
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');//foreign key
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proposals');
    }
};
