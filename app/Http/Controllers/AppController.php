<?php
namespace Toral\Http\Controllers;

use Toral\Http\Requests;


class AppController extends Controller
{
    /**
     * @return $this
     */
    public function index()
    {
        $js = app()->environment('production') ? 'app/build/production/App/microloader.js' : 'app/bootstrap.js';

        return view('app')->with( 'js' , $js );
    }


}
