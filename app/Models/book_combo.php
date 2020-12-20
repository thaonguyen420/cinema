<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book_combo extends Model
{
    protected $table = "book_combo";
    protected $primaryKey='id';
    public $fillable =['id','id_user','number','id_combo', 'id_schedule'];
}
