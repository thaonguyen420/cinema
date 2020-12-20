<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class room extends Model
{
    protected $table='room';
    protected $dates=['update_date'];
    protected $primaryKey='roomId';
    protected $fillable = [
        'roomId',
        'number',
        'status',
        'theaterId'
      
    ];  
}
