<?php

class Trabajador
{

    private $id_trabajador;
    private $dni;
    private $nombres;
    private $apellido_uno;
    private $apellido_dos;
    private $puesto;
    private $fecha_inicio_labores;
    private $id_area;
    private $estado;

    public function __construct()
    {
        $this->id_trabajador = '';
        $this->dni = '';
        $this->nombres = '';
        $this->apellido_uno = '';
        $this->apellido_dos = '';
        $this->puesto = '';
        $this->fecha_inicio_labores = '';
        $this->id_area = '';
        $this->estado = '';
    }


    function setid_trabajador($id_trabajador)
    {
        $this->id_trabajador = $id_trabajador;
    }
    function getid_trabajador()
    {
        return $this->id_trabajador;
    }



    function setdni($dni)
    {
        $this->dni = $dni;
    }
    function getdni()
    {
        return $this->dni;
    }


    function setnombres($nombres)
    {
        $this->nombres = $nombres;
    }
    function getnombres()
    {
        return $this->nombres;
    }


    function setapellido_uno($apellido_uno)
    {
        $this->apellido_uno = $apellido_uno;
    }
    function getapellido_uno()
    {
        return $this->apellido_uno;
    }

    function setapellido_dos($apellido_dos)
    {
        $this->apellido_dos = $apellido_dos;
    }
    function getapellido_dos()
    {
        return $this->apellido_dos;
    }

    function setpuesto($puesto)
    {
        $this->puesto = $puesto;
    }
    function getpuesto()
    {
        return $this->puesto;
    }

    function setfecha_inicio_labores($fecha_inicio_labores)
    {
        $this->fecha_inicio_labores = $fecha_inicio_labores;
    }
    function getfecha_inicio_labores()
    {
        return $this->fecha_inicio_labores;
    }

    function setid_area($id_area)
    {
        $this->id_area = $id_area;
    }
    function getid_area()
    {
        return $this->id_area;
    }

    function setestado($estado)
    {
        $this->estado = $estado;
    }
    function getestado()
    {
        return $this->estado;
    }
}
