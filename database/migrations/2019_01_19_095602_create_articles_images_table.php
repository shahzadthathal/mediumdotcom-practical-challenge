<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles_images', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('article_id');
            $table->string('photo');
            $table->boolean('dispaly')->default(1)->comment('0=No, 1=Yes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles_images');
    }
}
