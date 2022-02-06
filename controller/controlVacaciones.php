<?php

//MODEL
include_once('model/modelVacaciones.php');
include_once('model/modelAseets.php');
include_once('model/modelTrabajador.php');

//DATOS
include_once('data/vacaciones.php');
include_once('data/correo.php');


//UITLS
include_once('utils/modelSession.php');


class ControlVacaciones
{
    public $MODEL;
    public $ASSET;
    public $SESSION;
    public $TRABAJADOR;

    public function __construct()
    {
        $this->MODEL = new ModeloVacaciones();
        $this->SESSION = new ModeloSession();
        $this->ASSET = new ModeloAssets();
        $this->TRABAJADOR = new ModeloTrabajador();
    }

    //vista registrar evento
    public function registrarVacaciones()
    {
        try {
            $this->SESSION->isSession();
            $titulo = "Registrar Vacaciones Personal";
            if (isset($_REQUEST['ruta']) == 'registrarVacaciones') {
                $ruta = 'registrarVacaciones';
                $show_vacaciones = 'show'; //PARA DESGLOZAR EL MENU
                $active_vacaciones = 'active';
            } 
            $dataTrabajador = $this->TRABAJADOR->allTrabajador();
            include_once('view/vacaciones/registrarVacaciones.php');
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //consumo de datos para pintar los eventos
    public  function getAllVacaciones()
    {
        try {
            //session start
            $this->SESSION->isSession();

            $data = $this->MODEL->allVacaciones();
            echo json_encode($data);
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    public function editarVacaciones()
    {
        try {
            //session start
            $this->SESSION->isSession();

            $vacaciones = new Vacaciones();
            $vacaciones->setid_vaciones($_POST['txt_id_vacaciones']);
            $titulo = "Actualizar datos de las Vacaciones";
            $dataVacaciones = $this->MODEL->vacacionesById($vacaciones);

            include_once('view/vacaciones/editarVacaciones.php');
        } catch (Exception $th) {
            echo $th;
        }
    }

    public function actualizarVacaciones()
    {
        try {
            //session start
            $this->SESSION->isSession();
            $id_usuario = $_SESSION["id_usuario"];

            $vacaciones = new Vacaciones();
            $vacaciones->settitle($_POST['txt_titulo']);
            $vacaciones->setdescripcion($_POST['txt_descripcion']);
            $vacaciones->setcolor($_POST['txt_color']);
            $vacaciones->settextColor($_POST['txt_color_texto']);
            $vacaciones->setvacaciones_inicio($this->ASSET->formatFecha($_POST['txt_fecha_inicio']));
            $vacaciones->setvacaciones_fin($this->ASSET->formatFecha($_POST['txt_fecha_fin']));
            $vacaciones->setid_estado($_POST['cbo_estado_vacaciones']);
            $vacaciones->setid_vaciones($_POST['txt_id_vacaciones']);

           $save = $this->MODEL->updateVacaciones($vacaciones);

            if ($save) {
                echo 1;
            } else {
                echo 0;
            }
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }


    public function insertVacaciones()
    {
        try {
            //session start
            $this->SESSION->isSession();
            $id_usuario = $_SESSION["id_usuario"];

            $vacaciones = new Vacaciones();
            $vacaciones->settitle($_POST['txt_titulo']);
            $vacaciones->setdescripcion($_POST['txt_descripcion']);
            $vacaciones->setcolor($_POST['txt_color']);
            $vacaciones->settextColor($_POST['txt_color_texto']);
            $vacaciones->setvacaciones_inicio($this->ASSET->formatFecha($_POST['txt_fecha_inicio']));
            $vacaciones->setvacaciones_fin($this->ASSET->formatFecha($_POST['txt_fecha_fin']));
            $vacaciones->setid_usuario($id_usuario);
            $vacaciones->setid_estado(2);
            $vacaciones->setid_trabajador($_POST['cbo_trabajador']);

            $save = $this->MODEL->saveVacaciones($vacaciones);

            if ($save) {
                echo 1;
            } else {
                echo 0;
            }
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }
}
