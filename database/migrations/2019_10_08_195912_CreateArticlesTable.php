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
            $table->string('article_title ');
            $table->string('article_author');
            $table->string('article_Keywords');
            $table->text('article_content');
            $table->string('article_bibliography')->unique();
           // $table->string('article_image[]');
             $table->integer('redactor_id')->unsigned();

            $table->foreign('redactor_id')
                ->references('id')
                ->on('redactors')
                ->onDelete('cascade');
            
            $table->rememberToken();
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
        //
    }
}
