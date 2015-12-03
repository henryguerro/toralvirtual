<?php

namespace Toral\Entities;

use Illuminate\Database\Eloquent\Model;

class Testigo extends Model
{
    protected $table = 'padron_electoral';

    protected $primaryKey = 'cedula';

    protected $hidden = ['grupo'];

    public $timestamps = false;

    /**
     * @return Persona
     */
    public function Persona(){

        return $this->belongsTo('Toral\Entities\Persona','cedula', 'cedula');

    }



}
