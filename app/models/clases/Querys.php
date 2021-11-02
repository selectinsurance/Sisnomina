<?php
class Querys
{
    public static function Login($user, $pass)
    {
        return "SELECT user FROM usuario WHERE user = '$user' AND pass = '$pass'";
    }


    //query para ingresar empleados
    public static function CrearEmpleado($nombre, $apellido, $TipoDocumento, $documento, $telefono, $direccion, $fechaNacimiento, $correo, $sueldo, $AuxilioTransporte, $NombreEmpresa, $NIT)
    {
        return "INSERT INTO empleados(
                    nombre,
                    apellido,
                    TipoDocumento,
                    documento,
                    telefono,
                    direccion,
                    fechaNacimiento,
                    correo,
                    sueldo,
                    AuxilioTransporte,
                    NombreEmpresa,
                    NIT
                ) VALUES(
                    '$nombre',
                    '$apellido', 
                    '$TipoDocumento', 
                    '$documento',
                    '$telefono',
                    '$direccion',
                    '$fechaNacimiento',
                    '$correo',
                    '$sueldo',
                    '$AuxilioTransporte',
                    '$NombreEmpresa',
                    '$NIT'
            )";
    }

    //query para consultar salario empleado
    public static function ConsultarSalarioEmpleado($id)
    {
        return "SELECT sueldo, AuxilioTransporte FROM empleados WHERE IdEmpleado = '$id'";
    }


    //query para mostrar empleados
    public static function MostrarEmpleados()
    {
        return "SELECT * FROM empleados";
    }


    //query para consultar colilla
    public static function ConsultaIDColilla()
    {
        return 'SELECT idColilla FROM Horas ORDER BY idColilla DESC LIMIT 1';
    }


    //query para ingresar horas
    public static function IngresoHoras($HordinariaDiurna, $HordinariaNocturna, $HExtraOrdinariaDiurna, $HExtraOrdinariaNocturna, $HfestivaDiurna, $HfestivaNocturna, $HExtraFestivaDiurna, $HExtraFestivaNocturna, $IdEmpleado)
    {
        return "INSERT INTO Horas(
                HordinariaDiurna,
                HordinariaNocturna,
                HExtraOrdinariaDiurna,
                HExtraOrdinariaNocturna,
                HfestivaDiurna,
                HfestivaNocturna,
                HExtraFestivaDiurna,
                HExtraFestivaNocturna,
                IdEmpleado
        )
        
        VALUES(
            '$HordinariaDiurna', 
            '$HordinariaNocturna', 
            '$HExtraOrdinariaDiurna', 
            '$HExtraOrdinariaNocturna', 
            '$HfestivaDiurna', 
            '$HfestivaNocturna', 
            '$HExtraFestivaDiurna', 
            '$HExtraFestivaNocturna',
            '$IdEmpleado'
        )";
    }

    //Query para ingresar valores
    public static function IngresoValores($HoraOrdinariaDiurna, $HoraOrdinariaNocturna, $HoraExtraOrdinariaDiurna, $HoraExtraOrdinariaNocturna, $HoraFestivaDiurna, $HoraFestivaNocturna, $HoraExtraFestivaDiurna, $HoraExtraFestivaNocturn, $idColilla)
    {
        return "INSERT INTO Valores(
                VHordinariaDiurna,
                VHordinariaNocturna,
                VHExtraOrdinariaDiurna,
                VHExtraOrdinariaNocturna,
                VHfestivaDiurna,
                VHfestivaNocturna,
                VHExtraFestivaDiurna,
                VHExtraFestivaNocturna,
                idColilla
        )
        VALUES(
            '$HoraOrdinariaDiurna', 
            '$HoraOrdinariaNocturna', 
            '$HoraExtraOrdinariaDiurna', 
            '$HoraExtraOrdinariaNocturna', 
            '$HoraFestivaDiurna', 
            '$HoraFestivaNocturna', 
            '$HoraExtraFestivaDiurna', 
            '$HoraExtraFestivaNocturn',
            '$'
        )";
    }

    //query para consultar un empleado en especifico
    public static function ConsultarEmpleado($documento, $TipoDocumento){

        return "SELECT * FROM empleados WHERE documento = '$documento' AND TipoDocumento = '$TipoDocumento'";
    }
}
