<?php
session_start();
require_once 'app/views/assets/header.php';
require_once 'app/models/app_autoload.php';
//require_once 'app/models/clases/Calculo.php';

class Nomina
{
    
    public static function Login()
    {
        if (isset($_SESSION['logeado'])) {
            header('Location:Empleados');
        } else {
            require_once 'app/views/login.php';
            if (isset($_POST['btnIngresar'])) {
                $resultado = crud::Read(Querys::Login($_POST['user'], $_POST['pass']));
                if (!empty(mysqli_num_rows($resultado))) {
                    $_SESSION['logeado'] = $_POST['user'];
                    header('Location:Empleados');
                } else {
                    require_once 'login';
                }
            }
        }
    }


    //controlador para mostrar en una tabla todos los empleados
    public static function Empleados()
    {
        if (isset($_SESSION['logeado'])) {
            require_once 'app/views/assets/Menu.php';
            $empleados = crud::Read(Querys::MostrarEmpleados());
            require_once 'app/views/pages/Nomina.php';
            if (isset($_POST['btnIngresarEmpleado'])) {

                //Ingresar Empleado
                crud::Create(Querys::CrearEmpleado($_POST['Nombre'], $_POST['Apellido'], $_POST['TipoDoc'], $_POST['Documento'], $_POST['Telefono'], $_POST['Direccion'], $_POST['FechaNac'], $_POST['Correo'], $_POST['Salario'], $_POST['AuxilioDeTransporte'], $_POST['NombreEmpresa'], $_POST['Nit']));
                header('Location:Login');
            }elseif (isset($_POST['btnConsultarEmpleado'])) {
                
                //consultar Empleado
                $Consulta = crud::Read(Querys::ConsultarEmpleado($_POST['DocumentoEmpleado'],$_POST['tipoDocumento']));

            }


        } else {
            header('Location:Login');
        }
    }


    //Controlador para ingresar horas facturadas por empleado
    public static function Calculo()
    {
        if (isset($_SESSION['logeado'])) {
            if (isset($_POST['id'])) {
                foreach ($_POST['id'] as $id) {
                    $Resultado = crud::Read(Querys::ConsultarSalarioEmpleado($id));
                    $Salario = mysqli_fetch_assoc($Resultado);
                    //$Convertido = intval($Salario);
                    require_once 'app/views/pages/FormularioIngresoNomina.php';
                }
            } else {
                header('Location:Empleados');
            }
        } else {
            header('Location:Login');
        }
    }

    //Cotrolador para hacer el calculo de todos los datos del empleado
    public static function Totales()
    {
        if (isset($_SESSION['logeado'])) {
            //$Basico =  $_POST['Basico'];
            $calculo = new Calculo(
                $_POST['Basico'],
                $_POST['HoraOrdinariaDiurna'],
                $_POST['HoraOrdinariaNocturna'],
                $_POST['HoraExtraOrdinariaDiurna'],
                $_POST['HoraExtraOrdinariaNocturna'],
                $_POST['HoraFestivaDiurna'],
                $_POST['HoraFestivaNocturna'],
                $_POST['HoraExtraFestivaDiurna'],
                $_POST['HoraExtraFestivaNocturna'],
                $_POST['AuxilioDeTransporte']
            );

            //Valores
            $HoraOrdinariaDiurna = $calculo->HoraOrdinariaDiurna();
            $HoraOrdinariaNocturna = $calculo->HoraOrdinariaNocturna();
            $HoraExtraOrdinariaDiurna = $calculo->HoraExtraOrdinariaDiurna();
            $HoraExtraOrdinariaNocturna = $calculo->HoraExtraOrdinariaNocturna();
            $HoraFestivaDiurna = $calculo->HoraFestivaDiurna();
            $HoraFestivaNocturna = $calculo->HoraFestivaNocturna();
            $HoraExtraFestivaDiurna = $calculo->HoraExtraFestivaDiurna();
            $HoraExtraFestivaNocturna = $calculo->HoraExtraFestivaNocturna();



            //Totales
            $devengado = $calculo->Bruto();
            $deducciones = $calculo->Deducciones();
            $AuxTransporte = $calculo->AuxilioDeTransporte();
            $neto = $calculo->Neto();


            require_once 'app/views/pages/ResultadoCalculo.php';
            if (isset($_POST['btnIngresarNomina'])) {
                crud::Create(Querys::IngresoHoras($_POST['HoraOrdinariaDiurna'], $_POST['HoraOrdinariaNocturna'], $_POST['HoraExtraOrdinariaDiurna'], $_POST['HoraExtraOrdinariaNocturna'], $_POST['HoraFestivaDiurna'], $_POST['HoraFestivaNocturna'], $_POST['HoraExtraFestivaDiurna'], $_POST['HoraExtraFestivaNocturna'], $_POST['id']));


                //Consultando id colillla y ingresando datos de los valores a la base de datos
                $idColilla = crud::Read(Querys::ConsultaIDColilla());
                crud::Create(Querys::IngresoValores($HoraOrdinariaDiurna, $HoraOrdinariaNocturna, $HoraExtraOrdinariaDiurna, $HoraExtraOrdinariaNocturna, $HoraFestivaDiurna, $HoraFestivaNocturna, $HoraExtraFestivaDiurna, $HoraExtraFestivaNocturna, $idColilla));
                $idCliente = $_POST['id'];
                header("Location:Colillapdf.php?id=$idCliente");
            }
        } else {
            header('Location:Login');
        }
    }

    public static function Cerrar()
    {
        if (isset($_SESSION['logeado'])) {
            session_destroy();
            header('Location:Login');
        } else {
            header('Location:Login');
        }
    }
}




require_once 'app/views/assets/footer.php';
