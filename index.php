<?php
require_once 'app/controller/Controller.php';
$Valor = $_GET['Controller'];
if (isset($_GET['Controller']) && !empty($_GET['Controller'])) {
    switch ($_GET['Controller']) {
        case $Valor:
            Nomina::$Valor();
            break;
    }
}else {
    Nomina::Login();
}
