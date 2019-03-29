<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('recipe_number')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('name');
            $table->integer('estimate_time')->unsigned();
            $table->text('description')->nullable();
            $table->text('image')->nullable();
            $table->string('video_link')->nullable();
            $table->integer('rating_point')->nullable()->unsigned();
            $table->integer('level_id')->unsigned();
            $table->integer('people_number')->unsigned();
            $table->integer('status')->unsigned()->default(0);
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
        Schema::dropIfExists('recipes');
    }
}
