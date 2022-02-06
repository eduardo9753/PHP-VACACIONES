<?php

include_once('config/conexionOracle.php');
include_once('config/conexionMysql.php');

class ModeloGrafico
{

    public $PDO;
    public $MYSQL;
    public $SQLSERVER;

    public function __construct()
    {
        try {
            $this->PDO = new ConexionOracle(); //INICIANDO LA CONEXION A LA BD
            $this->MYSQL = new ClassConexion();
            $this->SQLSERVER = new ConexionSqlServer();
        } catch (Exception $th) {
            throw $th;
        }
    }


    public function countVacacionesTerminadas()
    {
        try {
            $sql = "SELECT * FROM dbo.vacaciones where dbo.vacaciones.id_estado = 1";
            $stm = $this->SQLSERVER->ConectarSqlServer()->prepare($sql);
            $stm->execute();
            $stm->fetchAll(PDO::FETCH_OBJ);
            return $stm->rowCount();
        } catch (\Throwable $th) {
            throw $th;
        }
    }


    public function countVacacionesEnCursos()
    {
        try {
            $sql = "SELECT * FROM dbo.vacaciones where dbo.vacaciones.id_estado = 2";
            $stm = $this->SQLSERVER->ConectarSqlServer()->prepare($sql);
            $stm->execute();
            $stm->fetchAll(PDO::FETCH_OBJ);
            return $stm->rowCount();
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function countVacacionesRechazadas()
    {
        try {
            $sql = "SELECT * FROM dbo.vacaciones where dbo.vacaciones.id_estado = 3";
            $stm = $this->SQLSERVER->ConectarSqlServer()->prepare($sql);
            $stm->execute();
            $stm->fetchAll(PDO::FETCH_OBJ);
            return $stm->rowCount();
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function countTotal()
    {
        try {
            $sql = "SELECT * FROM dbo.vacaciones";
            $stm = $this->SQLSERVER->ConectarSqlServer()->prepare($sql);
            $stm->execute();
            $stm->fetchAll(PDO::FETCH_OBJ);
            return $stm->rowCount();
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
