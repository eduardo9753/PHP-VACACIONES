<?php

include_once('config/conexionMysql.php');
include_once('config/conexionSQLSERVER.php');

class ModeloVacaciones
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

    public function updateVacaciones(Vacaciones $vacaciones)
    {
        try {
            $sql = "UPDATE dbo.vacaciones set title=?,
            descripcion=?,
            color=?,
            textColor=?,
            vacaciones_inicio =?,
            vacaciones_fin =?,
            id_estado=? where id_vaciones=?";
            $stm = $this->MSQSERVER->ConectarSqlServer()->prepare($sql)->execute(
                array(
                   $vacaciones->gettitle(),
                   $vacaciones->getdescripcion(),
                   $vacaciones->getcolor(),
                   $vacaciones->gettextColor(),
                   $vacaciones->getvacaciones_inicio(),
                   $vacaciones->getvacaciones_fin(),
                   $vacaciones->getid_estado(),
                   $vacaciones->getid_vaciones()
                )
            );
            return $stm;
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //REGIATRAR SUGERENCIAS
    public function saveVacaciones(Vacaciones $vacaciones)
    {
        try {
            $sql = "INSERT INTO dbo.vacaciones(title,descripcion,color,textColor,vacaciones_inicio,vacaciones_fin,id_usuario,id_estado,id_trabajador) 
            VALUES(?,?,?,?,?,?,?,?,?)";
            $stm = $this->MSQSERVER->ConectarSqlServer()->prepare($sql)->execute(
                array(
                    $vacaciones->gettitle(),
                    $vacaciones->getdescripcion(),
                    $vacaciones->getcolor(),
                    $vacaciones->gettextColor(),
                    $vacaciones->getvacaciones_inicio(),
                    $vacaciones->getvacaciones_fin(),
                    $vacaciones->getid_usuario(),
                    $vacaciones->getid_estado(),
                    $vacaciones->getid_trabajador()
                )
            );
            return $stm;
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //MODIFICABLE
    public function allVacaciones()
    {
        try {
            $sql = 'SELECT vaca.title as "title", vaca.descripcion as "descripcion",
            vaca.color as "color", vaca.textColor AS "textColor",
            vaca.vacaciones_inicio as "start",  vaca.vacaciones_fin as "end", 
            vaca.id_usuario as "id_usuario",  vaca.id_estado as "id_estado",
            vaca.id_trabajador as "id_trabajador",vaca.id_vaciones AS "id",
            tra.nombres as "nombres", tra.apellido_uno as "apellido_uno", tra.apellido_dos as "apellido_dos"
            FROM dbo.vacaciones AS vaca
            INNER JOIN dbo.trabajador tra on vaca.id_trabajador = tra.id_trabajador;';
            $stm = $this->MSQSERVER->ConectarSqlServer()->prepare($sql);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //MODIFICABLE
    public function vacacionesById(Vacaciones $vacaciones)
    {
        try {
            $sql = 'SELECT vaca.title as "title", vaca.descripcion as "descripcion",
            vaca.color as "color", vaca.textColor AS "textColor",
            vaca.vacaciones_inicio as "start",  vaca.vacaciones_fin as "end", 
            vaca.id_usuario as "id_usuario", 
            vaca.id_trabajador as "id_trabajador",vaca.id_vaciones AS "id_vaciones",
            tra.nombres as "nombres", tra.apellido_uno as "apellido_uno", tra.apellido_dos as "apellido_dos",
			e.estado as "estado", e.id_estado as "id_estado"
            FROM dbo.vacaciones AS vaca
            INNER JOIN dbo.trabajador tra on vaca.id_trabajador = tra.id_trabajador
			INNER JOIN dbo.estado e on vaca.id_estado = e.id_estado
            WHERE vaca.id_vaciones = ?';
            $stm = $this->MSQSERVER->ConectarSqlServer()->prepare($sql);
            $stm->execute(array($vacaciones->getid_vaciones()));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }
}
