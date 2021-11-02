<?php 
require_once 'mysql.php';
    class crud
    {
        public static function Create($query){
            mysql::Conexion()->query($query);
        }

        public static function Read($query){
            return mysql::Conexion()->query($query);
        }

        public static function Update($query){
            mysql::Conexion()->query($query);
        }

        public static function Delete($query){
            mysql::Conexion()->query($query);
        }

    }
