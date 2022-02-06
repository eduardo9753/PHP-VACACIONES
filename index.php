<?php

include_once('controller/controlIndex.php');
include_once('controller/controlLogin.php');
include_once('controller/controlGrafico.php');
include_once('controller/controlProfile.php');
include_once('controller/controlVacaciones.php');
include_once('controller/controlArea.php');
include_once('controller/controlTrabajador.php');

date_default_timezone_set("America/Lima");
//PHP PDF
require_once 'lib/pdf/fpdf.php';

//PHP EXCEL
require_once 'lib/PHPExcel/Classes/PHPExcel.php';


//VARIABLES CONTROLADORES
$controlIndex = new ControlIndex();
$controlLogin = new ControlLogin();
$controlGrafico = new ControlGrafico();
$controlProfile = new ControlProfile();
$controlVacaciones = new ControlVacaciones();
$controlArea = new ControlArea();
$controlTrabajador = new ControlTrabajador();


//LLAMADA DE METODOS
if (!isset($_REQUEST['ruta'])) {
    $controlIndex->index();
} else {
    $peticion = $_REQUEST['ruta'];
    if (method_exists($controlIndex, $peticion)) {
        call_user_func(array($controlIndex, $peticion));
    } else if (method_exists($controlLogin, $peticion)) {
        call_user_func(array($controlLogin, $peticion));
    } else if (method_exists($controlGrafico, $peticion)) {
        call_user_func(array($controlGrafico, $peticion));
    } else if (method_exists($controlProfile, $peticion)) {
        call_user_func(array($controlProfile, $peticion));
    } else if (method_exists($controlVacaciones, $peticion)) {
        call_user_func(array($controlVacaciones, $peticion));
    } else if (method_exists($controlArea, $peticion)) {
        call_user_func(array($controlArea, $peticion));
    } else if (method_exists($controlTrabajador, $peticion)) {
        call_user_func(array($controlTrabajador, $peticion));
    } else {
        $controlIndex->NoEncontrado();
    }
}
