<?php

include_once('config/conexionMysql.php');
include_once('config/conexionSQLSERVER.php');

class ModeloTrabajador
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
    public function allTrabajador()
    {
        try {
            $sql = 'SELECT * FROM dbo.trabajador';
            $stm = $this->MSQSERVER->ConectarSqlServer()->prepare($sql);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }


    public function trabajadorById(Trabajador $trabajador)
    {
        try {
            $sql = 'SELECT traba.id_trabajador, traba.dni,traba.nombres,
            traba.apellido_uno, traba.apellido_dos,traba.puesto,traba.fecha_inicio_labores,
            a.area,a.id_area
            FROM dbo.trabajador as  traba
            INNER JOIN dbo.area a on traba.id_area = a.id_area
            WHERE traba.id_trabajador=?';
            $stm = $this->MSQSERVER->ConectarSqlServer()->prepare($sql);
            $stm->execute(array($trabajador->getid_trabajador()));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    

    public function saveTrabajador(Trabajador $trabajador)
    {
        try {
            $sql = "INSERT INTO dbo.trabajador(dni,nombres,apellido_uno,apellido_dos,puesto,fecha_inicio_labores,id_area,estado)  
            VALUES(?,?,?,?,?,?,?,?)";
            $stm = $this->MSQSERVER->ConectarSqlServer()->prepare($sql)->execute(
                array(
                    $trabajador->getdni(),
                    $trabajador->getnombres(),
                    $trabajador->getapellido_uno(),
                    $trabajador->getapellido_dos(),
                    $trabajador->getpuesto(),
                    $trabajador->getfecha_inicio_labores(),
                    $trabajador->getid_area(),
                    $trabajador->getestado()
                )
            );
            return $stm;
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    public function updateTrabajador(Trabajador $trabajador)
    {
        try {
            $sql = "UPDATE dbo.trabajador set dni = ?,
            nombres =?,
            apellido_uno=?,
            apellido_dos=?,
            puesto=?,
            estado=?,
            fecha_inicio_labores=?,
            id_area=? where id_trabajador =?";
            $stm = $this->MSQSERVER->ConectarSqlServer()->prepare($sql)->execute(
                array(
                   $trabajador->getdni(),
                   $trabajador->getnombres(),
                   $trabajador->getapellido_uno(),
                   $trabajador->getapellido_dos(),
                   $trabajador->getpuesto(),
                   $trabajador->getestado(),
                   $trabajador->getfecha_inicio_labores(),
                   $trabajador->getid_area(),
                   $trabajador->getid_trabajador()
                )
            );
            return $stm;
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }
}
