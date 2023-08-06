<?php

namespace Controllers;

use Exception;
use Model\Alumno;
use MVC\Router;

//Método para mostrar la página de listado de alumnos.
class AlumnoController{
    public static function index(Router $router){
         // Obtener todos los alumnos desde la base de datos usando el modelo Alumno.
        $alumnos = Alumno::php_FindAll();
        // Renderizar la vista 'alumnos/index' y pasar la lista de alumnos como variable.
        $router->render('alumnos/index', [
            'alumnos' => $alumnos,
            // 'alumnos2' => $alumnos2,
        ]);

    }