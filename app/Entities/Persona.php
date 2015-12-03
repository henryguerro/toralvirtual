<?php

namespace Toral\Entities;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'datos_miembro';

    protected $primaryKey = 'cedula';

    protected $fillable = ['direccion', 'tlf_local', 'tlf_celular', 'email', 'observacion'];

    protected $hidden = ['id_partido','foto'];

    public $timestamps = false;


    /**
     * @return RegistroElectoral
     */
    public function registroelectoral(){

        return $this->belongsTo('Toral\Entities\RegistroElectoral','cedula', 'cedula');

    }


}
