<?php

namespace Controllers;

use Exception;
use Model\Materia;
use MVC\Router;

//Método para mostrar la página de listado de materias.
class MateriaController{
    public static function index(Router $router){
        $materias = Materia::php_FindAll();
        $router->render('materias/index', [
            'materias' => $materias,
        ]);

    }

/**
* Método para crear una nueva materia mediante la API.
* Este método se utiliza para recibir datos enviados por una solicitud POST,
* crear un nuevo objeto Materia y guardar la materia en la base de datos.
* Luego, envía una respuesta JSON indicando si la creación fue exitosa o si ocurrió un error.
 */
    public static function API_CREATE(){
        try {
            $materia = new Materia($_POST);
            $resultado = $materia->php_Create();

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