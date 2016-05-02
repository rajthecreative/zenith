<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTechnicalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technicalBlogs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('header');
            $table->string('photoLink');
            $table->text('discription');
            $table->unsignedMediumInteger('creative');
            $table->unsignedMediumInteger('love');
            $table->unsignedMediumInteger('commentId');
            $table->string('postedBy');
            $table->string('youtubeLink');
            $table->string('tagsId');
            $table->integer('categoryId');
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
        Schema::drop('technicalBlogs');
    }
}
