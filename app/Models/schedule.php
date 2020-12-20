<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
    protected $table='schedule';
    protected $dates=['update_date'];
    protected $primaryKey='Id_schedule';
    protected $fillable = [
        'date',
        'time',
        'movieId ',
        'roomId ',
        'updates ',
      
    ];  
}
