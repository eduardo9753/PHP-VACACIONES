<?php

class Estado
{
    private $id_estado;
    private $estado;


    public function __construct()
    {
        $this->id_estado = "";
        $this->estado = "";
    }


    public function setid_estado($id_estado)
    {
        $this->id_estado = $id_estado;
    }
    public function getid_estado()
    {
        return $this->id_estado;
    }



    public function setestado($estado)
    {
        $this->estado = $estado;
    }
    public function getestado()
    {
        return $this->estado;
    }
}
