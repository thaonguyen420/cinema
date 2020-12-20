<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $table = "comment";
    protected $primaryKey='id_comment';
    public $fillable =['id_comment', 'movieId','new_id','date','content','email','name'];
}
