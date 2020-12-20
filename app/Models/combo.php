<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class combo extends Model
{
    protected $table = "combo";
    protected $primaryKey='id_combo';
    public $fillable =['id_combo', 'name','desc','price'];
}
