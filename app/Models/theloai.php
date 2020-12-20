<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class theloai extends Model
{
    protected $table='category_movie';
    protected $dates=['update_date'];
    protected $primaryKey='id_tl';
    protected $fillable = [
        'id_tl',
        'ten_tl',
    ];  
}
