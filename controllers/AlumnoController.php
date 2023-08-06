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

    //Método para actualizar un registro existente de alumno mediante la API.
    //crear un objeto Alumno a partir de los datos recibidos y actualizar el registro correspondiente en la base de datos.
    public static function API_UPDATE(){
        try {
            $alumno = new Alumno($_POST);
            
            $resultado = $alumno->php_Update();

            if($resultado['resultado'] == 1){
                echo json_encode([
                    'mensaje' => 'Registro modificado correctamente',
                    'codigo' => 1
                ]);
            }else{
                echo json_encode([
                    'mensaje' => 'Ocurrió un error',
                    'codigo' => 0
                ]);
            }
        } catch (Exception $e) {
            echo json_encode([
                'detalle' => $e->getMessage(),
                'mensaje' => 'Ocurrió un error',
                'codigo' => 0
            ]);
        }
    }

    // Método para eliminar un registro de alumno mediante la API.
    //obtener el ID del alumno a eliminar, marcar el registro con 'detalle_situacion' = 0
    //en la base de datos y enviar una respuesta JSON que indica si la eliminación fue exitosa o si ocurrió un error.
 
 public static function API_DELETE(){
    try {
        $alumno_id = $_POST['alumno_id'];
        $alumno = Alumno::php_FindById($alumno_id);
        $alumno->detalle_situacion = 0;
        $resultado = $alumno->php_Delete();

        if($resultado['resultado'] == 1){
            echo json_encode([
                'mensaje' => 'Registro eliminado correctamente',
                'codigo' => 1
            ]);
        }else{
            echo json_encode([
                'mensaje' => 'Ocurrió un error',
                'codigo' => 0
            ]);
        }
    } catch (Exception $e) {
        echo json_encode([
            'detalle' => $e->getMessage(),
            'mensaje' => 'Ocurrió un error',
            'codigo' => 0
        ]);
    }
}



}