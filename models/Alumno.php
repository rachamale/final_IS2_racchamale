<?php

namespace Model;

//Tabla de base de datos alumnos
class Alumno extends ActiveRecord{
    public static $tabla = 'alumnos';
    public static $columnasDB = ['alu_nombre','alu_apellido','alu_grado','alu_arma','alu_nac','detalle_situacion'];
    public static $idTabla = 'id_alumnos';

    public $alumno_id;
    public $alumno_nombre;
    public $alumno_apellido;
    public $alumno_grado;
    public $alumno_arma;
    public $alumno_nac;
    public $detalle_situacion;

    public function __construct($args =[])
    {
        $this->alumno_id = $args['id_alumnos'] ?? null;
        $this->alumno_nombre = $args['alumno_nombre'] ?? '';
        $this->alumno_apellido = $args['alumno_apellido'] ?? '';
        $this->alumno_grado = $args['alumno_grado'] ?? '';
        $this->alumno_arma = $args['alumno_arma'] ?? '';
        $this->alumno_nac = $args['alumno_nac'] ?? '';
        $this->detalle_situacion = $args['detalle_situacion'] ?? '1';
    }

}