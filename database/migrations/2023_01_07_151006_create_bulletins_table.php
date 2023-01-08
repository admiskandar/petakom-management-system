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
        Schema::create('bulletins', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->increments('bulletin_id');
            $table->string('bulletin_name');
            $table->string('bulletin_category');
            $table->date('bulletin_date');
            $table->string('bulletin_tag')->nullable();
            $table->text('bulletin_excerpt')->nullable();
            $table->text('bulletin_detail')->nullable();
            $table->string('bulletin_pdf')->nullable();
            $table->string('bulletin_image')->nullable();
            $table->string('bulletin_video')->nullable();
            $table->string('bulletin_link')->nullable();

            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('activity_id')->nullable();
            $table->timestamps();

            // $table->foreign('user_id')->references('id')->on('users');
            // $table->foreign('activity_id')->references('activity_id')->on('activities');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bulletins');
    }
};
