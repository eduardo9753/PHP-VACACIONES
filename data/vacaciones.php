<?php

class Vacaciones
{
    private $id_vaciones;
    private $title;
    private $descripcion;
    private $color;
    private $textColor;
    private $vacaciones_inicio;
    private $vacaciones_fin;
    private $id_usuario;
    private $id_estado;
    private $id_trabajador;

    public function __construct()
    {
        $this->id_vaciones = '';
        $this->title = '';
        $this->descripcion = '';
        $this->color = '';
        $this->textColor = '';
        $this->vacaciones_inicio = '';
        $this->vacaciones_fin = '';
        $this->id_usuario = '';
        $this->id_estado = '';
        $this->id_trabajador = '';
    }

    function setid_vaciones($id_vaciones)
    {
        $this->id_vaciones = $id_vaciones;
    }
    function getid_vaciones()
    {
        return $this->id_vaciones;
    }



    function settitle($title)
    {
        $this->title = $title;
    }
    function gettitle()
    {
        return $this->title;
    }


    function setdescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }
    function getdescripcion()
    {
        return $this->descripcion;
    }


    function setcolor($color)
    {
        $this->color = $color;
    }
    function getcolor()
    {
        return $this->color;
    }



    function settextColor($textColor)
    {
        $this->textColor = $textColor;
    }
    function gettextColor()
    {
        return $this->textColor;
    }


    function setvacaciones_inicio($vacaciones_inicio)
    {
        $this->vacaciones_inicio = $vacaciones_inicio;
    }
    function getvacaciones_inicio()
    {
        return $this->vacaciones_inicio;
    }


    function setvacaciones_fin($vacaciones_fin)
    {
        $this->vacaciones_fin = $vacaciones_fin;
    }
    function getvacaciones_fin()
    {
        return $this->vacaciones_fin;
    }


    function setid_usuario($id_usuario)
    {
        $this->id_usuario = $id_usuario;
    }
    function getid_usuario()
    {
        return $this->id_usuario;
    }


    function setid_estado($id_estado)
    {
        $this->id_estado = $id_estado;
    }
    function getid_estado()
    {
        return $this->id_estado;
    }

    function setid_trabajador($id_trabajador)
    {
        $this->id_trabajador = $id_trabajador;
    }
    function getid_trabajador()
    {
        return $this->id_trabajador;
    }
}
