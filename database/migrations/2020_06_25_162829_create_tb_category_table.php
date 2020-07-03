<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbCategoryTable extends Migration
{
    
    public function up()
    {
        Schema::create('tb_category', function (Blueprint $table)
        {
            $table->bigIncrements('cat_id');
            $table->string('cat_name');
            $table->string('cat_text');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('tb_category');
    }
}
