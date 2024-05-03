<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\Domicilio;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;


class UsersController extends Controller
{
    //

    // Vista principal
    public function index() {
        //$this->usuarios();

        return view('index');
    }

    // Funcion para traer los datos de la base de datos
    public function usuarios() {
        $usuarios = Users::all();

        $usuariosDomicilio = [];

        for ($i=0; $i < count($usuarios); $i++) {
            $domicilio = Domicilio::where('user_id', $usuarios[$i]->id)
                                ->join('users', 'users.id', '=', 'user_domicilio.user_id')->first();

            array_push($usuariosDomicilio, $domicilio);
        }
   
        $personas = [];
        foreach ($usuariosDomicilio as $usuario) {


            // Calcular la edad
            $fechaNacimiento = Carbon::parse($usuario->fecha_nacimento);
            $hoy = new DateTime();
            $fechaActual = Carbon::parse($hoy);
            $duracion = $fechaActual->diff($fechaNacimiento);
            $edad = $duracion->y;

            // Agregar la edad al usuario
            $usuario->edad = $edad;

            // Agregar el usuario al array de usuarios
            $personas[] = $usuario;
        }
        //dd($personas[1]);

        return json_encode($personas);
    }
}
