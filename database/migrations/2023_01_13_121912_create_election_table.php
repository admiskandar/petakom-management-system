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
        Schema::create('election', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('candidate_name'); 
            $table->String('candidate_picture', 300)->nullable();
            $table->string('candidate_faculty');
            $table->string('candidate_year');
            $table->string('candidate_course');
            $table->string('candidate_manifesto');
            $table->string('election_year');
            $table->integer('total_vote')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('election');
    }
};
