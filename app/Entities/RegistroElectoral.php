<?php

namespace Toral\Entities;

use Illuminate\Database\Eloquent\Model;

class RegistroElectoral extends Model
{
    protected $table = 're';

    protected $primaryKey = 'cedula';

    protected $fillable = ['cedula', 'nacionalidad', 'nombre', 'fecha_nacimiento', 'cv'];

    protected $hidden = ['estado_civil','sexo'];

    public $timestamps = false;



    public function persona(){

        return $this->hasOne('Toral\Entities\Persona','cedula', 'cedula');

    }

}
