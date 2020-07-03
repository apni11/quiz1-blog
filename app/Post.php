<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'tb_post';
    protected $primarykey = 'id';
    protected $fillable = ['post_date', 'post_slug', 'post_tittle', 'post_text', 'post_cat_id'];

    public function Photo()
  {
      return $this->hasMany('App\Photo');  
   }
   
}

