<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class manga extends Model
{
 protected $table='manga';

 protected $primaryKey = 'idmanga';

 protected $fillable =  array('nombre', 'editorial', 'cantidad','genero');

 protected $hidden = ['created_at','updated_at'];
}
