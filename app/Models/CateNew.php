<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CateNew extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'cate_new_name', 'cate_new_slug'
    ];
    protected $primaryKey = 'cate_new_id';
     protected $table = 'category_new';
    
    // 1 danh mục có nhiều bài viết
    public function new(){
        $this->hasMany('App\News');

    }
}
