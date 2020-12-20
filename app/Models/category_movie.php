<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category_movie extends Model
{
    protected $table = "category_movie";
    protected $primaryKey='id_tl';
    public $fillable =['id_tl', 'ten_tl'];
}
