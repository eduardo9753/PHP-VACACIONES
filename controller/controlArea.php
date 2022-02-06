<?php

//MODEL
include_once('model/modelVacaciones.php');
include_once('model/modelAseets.php');
include_once('model/modelTrabajador.php');
include_once('model/modelArea.php');

//DATOS
include_once('data/vacaciones.php');
include_once('data/correo.php');
include_once('data/area.php');


//UITLS
include_once('utils/modelSession.php');


class ControlArea
{
    public $MODEL;
    public $ASSET;
    public $SESSION;
    public $AREA;
    public $TRABAJADOR;

    public function __construct()
    {
        $this->MODEL = new ModeloVacaciones();
        $this->SESSION = new ModeloSession();
        $this->ASSET = new ModeloAssets();
        $this->TRABAJADOR = new ModeloTrabajador();
        $this->AREA = new ModeloArea();
    }

    //vista registrar evento
    public function registrarArea()
    {
        try {
            $this->SESSION->isSession();
            $titulo = "Registrar Nueva Area";
            if (isset($_REQUEST['ruta']) == 'registrarArea') {
                $ruta = 'registrarArea';
                $show_area = 'show'; //PARA DESGLOZAR EL MENU
                $active_area = 'active';
            } 
            include_once('view/areas/registrarArea.php');
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }


    public function Area()
    {
        try {
            $this->SESSION->isSession();
            $titulo = "Listado de Areas";
            if (isset($_REQUEST['ruta']) == 'Area') {
                $ruta = 'Area';
                $show_area = 'show'; //PARA DESGLOZAR EL MENU
                $active_area = 'active';
            } 

            $dataArea = $this->AREA->allAreas();
            include_once('view/areas/listaAreas.php');
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    public function insertNewArea()
    {
        try {
            //session start
            $this->SESSION->isSession();
            $id_usuario = $_SESSION["id_usuario"];

            $area = new Area();
            $area->setarea($_POST['txt_area']);

            $save = $this->AREA->insertAreas($area);

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
