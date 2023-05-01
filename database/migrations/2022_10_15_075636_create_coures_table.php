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
        Schema::create('coures', function (Blueprint $table) {
            $table->id();
            $table->string('couresname');
            $table->timestamps();
        });

    }

    // //  $table->id();
    // $table->integer('coure_id');
    // $table->string('question_text');
    // $table->string('question_video');
    // $table->timestamps();

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coures');
    }
};
