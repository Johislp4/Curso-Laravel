<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{

    public function index()
    {


        if (request()->has('empty')) {

            $users = [];
        } else {
            //Datos que queremos pasar a nuestra vista desde el controlador
            $users = [
                'johana',
                'pepito',
                'manuel',
                'tomy',
            ];

        }


        $title = 'listado de usuarios';

        //Para pasar los datos de $user a la vista debo pasar como segundo argumento de la función view
        // las variables que quiero pasar a mi vista

        return view('users.index', compact('users', 'title'));

    }

    public function users()
    {
        return 'usuario creado';
    }

    public function show($id)
    {

        return view('users.show', compact('id'));

    }

    public function welcome($name, $lastname)
    {

        return "Bienvenido {$name}, tu apellido es {$lastname}";

    }
}
