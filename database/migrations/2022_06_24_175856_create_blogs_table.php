<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{

    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('date');
            $table->string('short_description');
            $table->string('description');
            $table->boolean('status');
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
        Schema::dropIfExists('news');
    }
}
