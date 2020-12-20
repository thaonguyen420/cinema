<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    protected $table='contact';
    protected $dates=['update_date'];
    protected $primaryKey='id';
    protected $fillable = [
        'id',
        'name',
        'email',
        'content',
    ];
}
