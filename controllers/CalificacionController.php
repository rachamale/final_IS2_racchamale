<?php

namespace Controllers;

use Exception;
use Model\Calificacion;
use MVC\Router;

//Método para mostrar la página de listado de calificaciones.
class CalificacionController{
    public static function index(Router $router){
        $calificaciones = Calificacion::php_FindAll();
        $router->render('calificaciones/index', [
            'calificaciones' => $calificaciones,
            // 'calificaciones2' => $calificaciones2,
        ]);
    }

/**
 * Método para crear una nueva calificación mediante la API.
 * Este método se utiliza para recibir datos enviados por una solicitud POST,
 * crear un nuevo objeto Calificacion y guardar la calificación en la base de datos.
 * Luego, envía una respuesta JSON indicando si la creación fue exitosa o si ocurrió un error.
 */
    public static function API_CREATE(){
        try {
            $calificacion = new Calificacion($_POST);
            $resultado = $calificacion->php_Create();

            if($resultado['resultado'] == 1){
                echo json_encode([
                    'mensaje' => 'Registro guardado correctamente',
                    'codigo' => 1
                ]);
            }else{
                echo json_encode([
                    'mensaje' => 'Ocurrió un error',
                    'codigo' => 0
                ]);
            }
            // echo json_encode($resultado);
        } catch (Exception $e) {
            echo json_encode([
                'detalle' => $e->getMessage(),
                'mensaje' => 'Ocurrió un error',
                'codigo' => 0
            ]);
        }
    }




}