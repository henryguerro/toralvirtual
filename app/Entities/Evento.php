<?php

namespace Toral\Entities;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = 'evento';

    protected $primaryKey = 'idevento';

    protected $hidden = ['clave'];

    public $timestamps = false;


}
