<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phim extends Model
{
    protected $table='movies';
    protected $dates=['update_date'];
    protected $primaryKey='movieId';
    protected $fillable = [
        'movieId',
        'name',
        'trailer',
        'row',
        'content',
        'time',
        'director',
        'actor',
        'nation',
        'price',
        'phimhot',
        'producer',
        'language',
        'release_date',
        'status',
        'id_tl'
      
    ];  
}
