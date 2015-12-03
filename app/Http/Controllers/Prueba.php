<?php

namespace Toral\Http\Controllers;

use Illuminate\Http\Request;

use Toral\Entities\Persona;
use Toral\Entities\RegistroElectoral;
use Toral\Entities\Testigo;
use Toral\Entities\Parroquia;

use Toral\Http\Requests;
use Toral\Http\Controllers\Controller;

class Prueba extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $p= Parroquia::where('id_parroquia',110101)->get();

        return $p->centros()->first();
    }


}
