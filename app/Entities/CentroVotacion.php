<?php

namespace Toral\Entities;

use Illuminate\Database\Eloquent\Model;

class CentroVotacion extends Model
{
    protected $table = 'centro_votacion';

    protected $primaryKey = 'id_centro_votacion';

    //protected $fillable = ['direccion', 'tlf_local', 'tlf_celular', 'email', 'observacion'];

    //protected $hidden = ['id_partido','foto'];

    public $timestamps = false;


    /**
     * @return RegistroElectoral
     */
    public function registroelectoral(){
        //foreign_key local_key

        return $this->belongsTo('Toral\Entities\Parroquia','id_parroquia', 'id_parroquia');

    }
}
