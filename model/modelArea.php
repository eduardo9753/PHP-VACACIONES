<?php

include_once('config/conexionMysql.php');
include_once('config/conexionSQLSERVER.php');

class ModeloArea
{
    public $PDO;
    public $MSQSERVER;

    public function __construct()
    {
        try {
            $this->PDO = new ClassConexion(); //INICIANDO LA CONEXION A LA BD
            $this->MSQSERVER = new ConexionSqlServer();
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //MODIFICABLE
    public function allAreas()
    {
        try {
            $sql = 'SELECT * FROM dbo.area';
            $stm = $this->MSQSERVER->ConectarSqlServer()->prepare($sql);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    public function insertAreas(Area $area)
    {
        try {
            $sql = 'INSERT INTO dbo.area(area) VALUES(?);';
            $stm = $this->MSQSERVER->ConectarSqlServer()->prepare($sql);
            $stm->execute(array($area->getarea()));
            return $stm;
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }
}
