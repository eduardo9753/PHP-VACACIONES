<?php

//MODEL
include_once('model/modelVacaciones.php');
include_once('model/modelAseets.php');
include_once('model/modelTrabajador.php');
include_once('model/modelArea.php');

//DATOS
include_once('data/vacaciones.php');
include_once('data/trabajador.php');
include_once('data/correo.php');


//UITLS
include_once('utils/modelSession.php');


class ControlTrabajador
{
    public $MODEL;
    public $ASSET;
    public $SESSION;
    public $TRABAJADOR;
    public $AREA;

    public function __construct()
    {
        $this->MODEL = new ModeloVacaciones();
        $this->SESSION = new ModeloSession();
        $this->ASSET = new ModeloAssets();
        $this->TRABAJADOR = new ModeloTrabajador();
        $this->AREA = new ModeloArea();
    }

    //vista registrar evento
    public function registrarTrabajador()
    {
        try {
            $this->SESSION->isSession();
            $titulo = "Registrar Nuevo Trabajador";
            if (isset($_REQUEST['ruta']) == 'registrarTrabajador') {
                $ruta = 'registrarTrabajador';
                $show_trabajador = 'show'; //PARA DESGLOZAR EL MENU
                $active_trabajador = 'active';
            } 
            $dataArea = $this->AREA->allAreas();
            include_once('view/trabajador/registrarTrabajador.php');
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    public function Trabajador()
    {
        try {
            $this->SESSION->isSession();
            $titulo = "Trabajadores";
            if (isset($_REQUEST['ruta']) == 'Trabajador') {
                $ruta = 'Trabajador';
                $show_trabajador = 'show'; //PARA DESGLOZAR EL MENU
                $active_trabajador = 'active';
            }
            $dataTrabajador = $this->TRABAJADOR->allTrabajador();
            include_once('view/trabajador/listaTrabajador.php');
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    public function editarTrabajador()
    {
        try {
            //session start
            $this->SESSION->isSession();

            $trabajador = new Trabajador();
            $trabajador->setid_trabajador($_POST['txt_id_trabajador']);
            $titulo = "Actualizar datos del Trabajador";
            if (isset($_REQUEST['ruta']) == 'Trabajador') {
                $ruta = 'Trabajador';
                $show_trabajador = 'show'; //PARA DESGLOZAR EL MENU
                $active_trabajador = 'active';
            }
            $dataTrabajador = $this->TRABAJADOR->trabajadorById($trabajador);

            include_once('view/trabajador/editarTrabajador.php');
        } catch (Exception $th) {
            echo $th;
        }
    }

    public function actualizarTrabajador()
    {
        try {
            //session start
            $this->SESSION->isSession();

            $trabajador = new Trabajador();
            $trabajador->setdni($_POST['txt_documento']);
            $trabajador->setnombres($_POST['txt_nombres']);
            $trabajador->setapellido_uno($_POST['txt_apellido1']);
            $trabajador->setapellido_dos($_POST['txt_apellido2']);
            $trabajador->setpuesto($_POST['txt_puesto']);
            $trabajador->setestado($_POST['cbo_estado']);
            $trabajador->setfecha_inicio_labores($this->ASSET->formatFechaSinHora($_POST['txt_fecha_labores']));
            $trabajador->setid_area($_POST['cbo_areas']);
            $trabajador->setid_trabajador($_POST['txt_id_trabajador']);

            $save = $this->TRABAJADOR->updateTrabajador($trabajador);

            if ($save) {
                echo 1;
            } else {
                echo 0;
            }
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }


    public function insertTrabajador()
    {
        try {
            //session start
            $this->SESSION->isSession();

            $trabajador = new Trabajador();
            $trabajador->setdni($_POST['txt_documento']);
            $trabajador->setnombres($_POST['txt_nombres']);
            $trabajador->setapellido_uno($_POST['txt_apellido1']);
            $trabajador->setapellido_dos($_POST['txt_apellido2']);
            $trabajador->setpuesto($_POST['txt_puesto']);
            $trabajador->setfecha_inicio_labores($this->ASSET->formatFechaSinHora($_POST['txt_fecha_labores']));
            $trabajador->setid_area($_POST['cbo_areas']);
            $trabajador->setestado('ACTIVO');

            $save = $this->TRABAJADOR->saveTrabajador($trabajador);

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
