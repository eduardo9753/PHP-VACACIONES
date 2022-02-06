<?php

//MODEL
include_once('model/modelGrafico.php');
include_once('utils/modelMensaje.php');


//DATOS
include_once('data/usuario.php');

//UITLS
include_once('utils/modelSession.php');

class ControlGrafico
{

    public $MODELOGRAFICO;
    public $MSG;
    public $SESSION;

    public function __construct()
    {
        $this->MODELOGRAFICO = new ModeloGrafico;
        $this->MSG = new ModeloMensaje();
        $this->SESSION = new ModeloSession();
    }


    public function Graficos()
    {
        try {
            //session start
            $this->SESSION->isSession();

            $titulo = "Graficos";

            //color de links
            if (isset($_REQUEST['ruta']) == 'Graficos') {
                $ruta = 'Graficos';
                $show_estadistica = 'show'; //PARA DESGLOZAR EL MENU
                $active_estadistica = 'active';
            } 

            $dataVacacionesEnCursos = $this->MODELOGRAFICO->countVacacionesEnCursos();
            $dataVacacionesRechazadas = $this->MODELOGRAFICO->countVacacionesRechazadas();
            $dataVacacionesTerminadas = $this->MODELOGRAFICO->countVacacionesTerminadas();
            $dataTotal = $this->MODELOGRAFICO->countTotal();

            include_once('view/graficos/graficos.php');
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }
}
