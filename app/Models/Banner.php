<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'banner_name', 'banner_image', 'banner_desc'
    ];
    protected $primaryKey = 'banner_id';
     protected $table = 'banner';
    
}
