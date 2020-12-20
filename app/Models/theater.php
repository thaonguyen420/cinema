<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class theater extends Model
{
    protected $table = "theater";
    protected $primaryKey='theaterId';
    public $fillable =['theaterId','name','address'];
}
