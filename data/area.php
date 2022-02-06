<?php

class Area
{
    private $id_area;
    private $area;


    public function __construct()
    {
        $this->id_user = "";
        $this->area = "";
    }


    public function setid_area($id_area)
    {
        $this->id_area = $id_area;
    }
    public function getid_area()
    {
        return $this->id_area;
    }



    public function setarea($area)
    {
        $this->area = $area;
    }
    public function getarea()
    {
        return $this->area;
    }
}
