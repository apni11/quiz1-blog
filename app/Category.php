<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "tb_category";
    protected $primaryKey = "cat_id";
    protected $fillable = ['cat_name', 'cat_text'];
}
