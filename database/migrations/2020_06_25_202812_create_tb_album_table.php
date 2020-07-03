<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbAlbumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_album', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('album_name');
            $table->string('album_text');
            $table->unsignedBigInteger('album_pho_id');
            $table->foreign('album_pho_id')
                    ->references('id')->on('tb_photo');
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
        Schema::dropIfExists('tb_album');
    }
}
