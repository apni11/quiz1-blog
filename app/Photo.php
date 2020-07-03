<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table = 'tb_photo';
    protected $primarykey = 'id';
    protected $fillable = ['pho_date', 'pho_tittle', 'pho_text', 'pho_post_id'];
 

 public function Post()
  {
      return $this->belongsTo('App\Post')
      ;  
   }
}
