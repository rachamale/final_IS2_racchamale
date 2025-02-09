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

/**
 * Método para actualizar una materia mediante la API.
 * crear un nuevo objeto Materia a partir de los datos recibidos y actualizar la materia correspondiente
 * en la base de datos.
 * Luego, envía una respuesta JSON indicando si la actualización fue exitosa o si ocurrió un error.
 */
public static function API_UPDATE(){
    try {
        $materia = new Materia($_POST);
        
        $resultado = $materia->php_Update();

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

/**
 * Método para eliminar una materia mediante la API.
 * obtener el ID de la materia a eliminar, marcar el registro con 'detalle_situacion' = 0
 * en la base de datos y enviar una respuesta JSON que indica si la eliminación fue exitosa o si ocurrió un error.
 */
public static function API_DELETE(){
    try {
        $materia_id = $_POST['materia_id'];
        $materia = Materia::php_FindById($materia_id);
        $materia->detalle_situacion = 0;
        $resultado = $materia->php_Delete();

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

/**
 * Método para obtener una lista de materias mediante la API.
 * Este método se utiliza para recibir datos enviados por una solicitud GET,
 * filtrar los registros de materias en la base de datos según el nombre de materia proporcionado,
 * y enviar una respuesta JSON con la lista de materias que coinciden con el criterio de búsqueda.
 */    
public static function API_READ(){
    // $materias = Materia::all();
    $materia_nombre = $_GET['ma_nombre'];

    $sql = "SELECT * FROM materias where detalle_situacion = 1 ";
    if($materia_nombre != '') {
        $sql.= " and ma_nombre like '%$materia_nombre%' ";
    }
   
    try {
        
        $materias = Materia::fetchArray($sql);

        echo json_encode($materias);
    } catch (Exception $e) {
        echo json_encode([
            'detalle' => $e->getMessage(),
            'mensaje' => 'Ocurrió un error',
            'codigo' => 0
        ]);
    }
}

}