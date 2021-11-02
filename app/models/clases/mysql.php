<?php 
    class mysql  
    {
        public static function Conexion(){
            $conexion = mysqli_connect('localhost','root','','nomina');
            error_reporting(0);
            if ($conexion->connect_errno) {
                echo 'lo sentimos, no se establecio la conexion';
            }elseif ($conexion->set_charset("utf8")) {
                return $conexion;
            } 
        }
    }
