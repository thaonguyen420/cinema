<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'new_title', 'new_slug', 'new_desc', 'new_content', 'new_image', 'new_meta_keywords', 'cate_new_id'
    ];
    protected $primaryKey = 'new_id';
     protected $table = 'news';
    
    //1 bài viết thuộc 1 danh mục
    public function cate_new(){
        return $this->belongsTo('App\Models\CateNew','cate_new_id');
    }
}
