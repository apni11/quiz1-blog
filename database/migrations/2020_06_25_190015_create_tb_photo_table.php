<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPhotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::create('tb_photo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pho_date');
            $table->string('pho_tittle');
            $table->string('pho_text');
            $table->unsignedBigInteger('pho_post_id');
            $table->foreign('pho_post_id')
                    ->references('id')->on('tb_post');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_photo');
    }
}
