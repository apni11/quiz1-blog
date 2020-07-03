<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPostTable extends Migration
{
     
    public function up()
    {
     Schema::create('tb_post', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('post_date');
            $table->string('post_slug');
            $table->string('post_tittle');
            $table->string('post_text');
            $table->unsignedBigInteger('post_cat_id');
            $table->foreign('post_cat_id')
                    ->references('cat_id')->on('tb_category');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_post');
    }
}
