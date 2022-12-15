<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalAccessTokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diary_contents', function (Blueprint $table) {
            $table->id();
            $table->string('diary_id');->unique();
            $table->string('diary_txt', 100);
            $table->bigInteger('star');
            $table->tinyInteger('diary_flag');
            $table->date('diary_time');
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
        Schema::dropIfExists('diary_contents');
    }
}