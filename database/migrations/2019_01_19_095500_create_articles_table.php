<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->integer('user_id');
            $table->integer('topic_id');
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->string('tags')->nullable();
            $table->unsignedBigInteger('clap')->default(0);  
            $table->char('reading_time', 20)->default('16 min'); 
            $table->unsignedBigInteger('viewed')->default(0)->comment('How many time article viewed by users.');
            $table->boolean('status')->default(1)->comment('0=In Active, 1=Active');
            $table->boolean('is_popular')->default(0)->comment('0=No, 1=Yes');

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
        Schema::dropIfExists('articles');
    }
}
