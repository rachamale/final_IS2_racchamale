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

    //Método para crear un nuevo registro de alumno mediante la API
    //Este método se utiliza para recibir datos enviados por una solicitud POST,
    //crear un nuevo objeto Alumno y guardarlo en la base de datos.
    public static function API_CREATE(){
        try {
            $alumno = new Alumno($_POST);
            $resultado = $alumno->php_Create();

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
