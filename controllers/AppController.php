<?php

namespace Controllers;
use Exception;
use Model\Alumno;
use MVC\Router;

class AlumnoController {
    public static function index(Router $router){
        //se de clara una variable para almacenar
        $grados = static::grados();
        $armas = static::armas();
        $router->render('alumnos/index', [
            // se renderiza a la vista viejo pero mira
            'grados' => $grados, //buena onda 
            'armas' => $armas
       ]);


    }


}

?>