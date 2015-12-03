<?php

namespace Toral\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use Toral\User;
use Illuminate\Support\Facades\Hash;
use Toral\Http\Requests;

class AuthController extends Controller
{

    public function loggedin()
    {
            // Check to see if we are logged in via remember me cookie
            if (!Auth::check()) {
                // If not then return false
                return response()->ext([
                    'loggedin' => false,
                    'success'  => false
                ], 400);
            } else {
                // If so then return true as we still have a valid session cookie
                return response()->ext([
                    'loggedin' => true
                ], 200);
            }
    }

    public function login(Request $request)
    {
        $post_data = [
            'usuario'   => $request->input('usuario'),
            'password'  => $request->input('clave')
        ];

        $usuario = User::whereUsuario($post_data['usuario'])->first();


        if ($usuario->clave === $post_data['password']) {

            return $this->verificarEstatus($usuario);

        } else {

            return response()->ext([
                'success'   => false,
                'msg'       => 'Datos de validación Incorrectos'
            ], 500);

        }
    }

    private function verificarEstatus(User $usuario)
    {
        if ($usuario->estatus) {

            Auth::login($usuario);

            return response()->ext([
                'data' => Auth::User()
            ]);

        } else {
            return response()->ext([
                'success' => false,
                'msg'   => $usuario->usuario.' se encuentra Deshabilitado'
            ]);
        }
    }

    /**
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function logout()
    {
        Auth::logout();
        if (!Auth::check()) {
            // If not then return false
            return response()->ext([
                'loggedin' => false
            ]);
        }
    }

}
