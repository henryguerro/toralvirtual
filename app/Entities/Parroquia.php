<?php

namespace Toral\Entities;

use Illuminate\Database\Eloquent\Model;

class Parroquia extends Model
{
    protected $table = 'parroquia';

    protected $primaryKey = 'id_parroquia';

    //protected $fillable = ['direccion', 'tlf_local', 'tlf_celular', 'email', 'observacion'];

    //protected $hidden = ['id_partido','foto'];

    public $timestamps = false;


    public function centros()
    {

        $this->hasMany('Toral\Entities\CentroVotacion','id_parroquia', 'id_parroquia');
    }
}
