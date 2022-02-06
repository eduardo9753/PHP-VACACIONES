# Sistema de Registro de Vacaciones
Desarrollo de un Aplicativo Web para el registro y control de las vacaciones programadas para cada trabajador

------------

HERRAMIENTAS :
- Base de Datos: Microsoft SQL Server 2014.
- Estilos: CSS3 y Bootstrap 5.
- Lenguaje : Lenguaje PHP.
- Lenguaje : Lenguaje JavaScript.

## Arquitectura MVC
1. MODELO: representación de los datos que maneja el sistema, su lógica de negocio, y sus mecanismos de persistencia.
2. VISTA: Información que se envía al cliente y los mecanismos interacción con éste.
3. CONTROLADOR: intermediario entre el Modelo y la Vista, gestionando el flujo de información entre ellos y las transformaciones para adaptar los datos a las necesidades de cada uno.

## Imagenes


### SCRIPT DE LA BASE DE DATOS
```sql
CREATE DATABASE VACACIONES_PERSONAL;

USE VACACIONES_PERSONAL;

-----------------------------------------------------------------------
              --TABLA USUARIO
-----------------------------------------------------------------------
CREATE TABLE dbo.usuario
(
    id_usuario      INT PRIMARY KEY IDENTITY (1, 1),
    nombre_usuario  VARCHAR(100) NOT NULL,
    contra_usuario  VARCHAR(100) NOT NULL,
    perfil          VARCHAR(100) NULL,
    area_usuario    VARCHAR(100) NULL,
    foto            VARCHAR(100) NULL default 'foto.jpg',
	estado          CHAR(1),
    created_at      DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);


-----------------------------------------------------------------------
              --TABLA VACACIONES
-----------------------------------------------------------------------
CREATE TABLE dbo.vacaciones
(
    id_vaciones       INT PRIMARY KEY IDENTITY (1, 1),
    title             VARCHAR(100)  NULL,
    descripcion       TEXT  NULL,
    color             VARCHAR(100) NULL,
    textColor         VARCHAR(100) NULL,
    vacaciones_inicio DATETIME NULL,
    vacaciones_fin    DATETIME NULL,
    id_usuario        INT NOT NULL,
	id_estado         INT NOT NULL,
	id_trabajador     INT NOT NULL,
    created_at        DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);


-----------------------------------------------------------------------
              --TABLA ESTADO
-----------------------------------------------------------------------
CREATE TABLE dbo.estado
(
    id_estado        INT PRIMARY KEY IDENTITY (1, 1),
	estado           VARCHAR(50) NOT NULL,
	created_at        DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);


-----------------------------------------------------------------------
              --TABLA TRABAJADOR
-----------------------------------------------------------------------
CREATE TABLE dbo.trabajador
(
    id_trabajador         INT PRIMARY KEY IDENTITY (1, 1),
	dni                   VARCHAR(15) NOT NULL,
	nombres               VARCHAR(50) NOT NULL,
	apellido_uno          VARCHAR(50) NOT NULL,
	apellido_dos          VARCHAR(50) NOT NULL,
	puesto                VARCHAR(50) NOT NULL,
	fecha_inicio_labores  DATE NOT NULL,
	id_area               INT NOT NULL,
	estado                VARCHAR(30) NOT NULL,
	created_at            DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);

-----------------------------------------------------------------------
              --TABLA AREAS
-----------------------------------------------------------------------
CREATE TABLE dbo.area
(
    id_area        INT PRIMARY KEY IDENTITY (1, 1),
	area           VARCHAR(50) NOT NULL,
	created_at     DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);


-----------------------------------------------------------------------
              --VACACIONES - TRABAJADOR - USUARIO - ESTADO
-----------------------------------------------------------------------
ALTER TABLE dbo.vacaciones 
ADD CONSTRAINT FK_id_usuario FOREIGN KEY (id_usuario)
REFERENCES dbo.usuario (id_usuario);


ALTER TABLE dbo.vacaciones 
ADD CONSTRAINT FK_id_estado FOREIGN KEY (id_estado)
REFERENCES dbo.estado (id_estado);


ALTER TABLE dbo.vacaciones 
ADD CONSTRAINT FK_id_trabajador FOREIGN KEY (id_trabajador)
REFERENCES dbo.trabajador (id_trabajador);
-----------------------------------------------------------------------





-----------------------------------------------------------------------
               -- TRABAJADOR - AREA
-----------------------------------------------------------------------
ALTER TABLE dbo.trabajador 
ADD CONSTRAINT FK_id_area FOREIGN KEY (id_area)
REFERENCES dbo.area (id_area);
-----------------------------------------------------------------------





-----------------------------------------------------------------------
               -- DATA TABLA USUARIO
-----------------------------------------------------------------------
INSERT INTO dbo.usuario(nombre_usuario,contra_usuario) VALUES('aa','aa');
-----------------------------------------------------------------------


-----------------------------------------------------------------------
               -- DATA TABLA ESTADO
-----------------------------------------------------------------------
INSERT INTO dbo.estado(estado) VALUES('VACACIONES TERMINAS');
INSERT INTO dbo.estado(estado) VALUES('VACACIONES EN CURSO');
INSERT INTO dbo.estado(estado) VALUES('VACACIONES RECHAZADAS');
-----------------------------------------------------------------------


-----------------------------------------------------------------------
               -- DATA TABLA AREA
-----------------------------------------------------------------------
INSERT INTO dbo.area(area) VALUES('EMERGENCIA ADMISION');
INSERT INTO dbo.area(area) VALUES('EMERGENCIA RESPIRATORIO');
INSERT INTO dbo.area(area) VALUES('PAUS');
INSERT INTO dbo.area(area) VALUES('SISTEMAS TI');
INSERT INTO dbo.area(area) VALUES('ADMISION AMBULARORIO');
INSERT INTO dbo.area(area) VALUES('FARMACIA');
-----------------------------------------------------------------------



-----------------------------------------------------------------------
               -- DATA TABLA TRABAJADOR
-----------------------------------------------------------------------
INSERT INTO dbo.trabajador(dni,nombres,apellido_uno,apellido_dos,puesto,fecha_inicio_labores,id_area,estado) 
VALUES('736395743','Anthony Eduardo','Nuñez','Canchari','Asistente','2021/02/22','1','ACTIVO');
-----------------------------------------------------------------------



-----------------------------------------------------------------------
               -- DATA SELECT
-----------------------------------------------------------------------
SELECT * FROM dbo.area;
SELECT * FROM dbo.usuario;
SELECT vaca.title as "title", vaca.descripcion as "descripcion",
            vaca.color as "color", vaca.textColor AS "textColor",
            vaca.vacaciones_inicio as "start",  vaca.vacaciones_fin as "end", 
            vaca.id_usuario as "id_usuario",  vaca.id_estado as "id_estado",
            vaca.id_trabajador as "id_trabajador",vaca.id_vaciones AS "id_vaciones",
            tra.nombres as "nombres", tra.apellido_uno as "apellido_uno", tra.apellido_dos as "apellido_dos",
			e.estado as "estado", e.id_estado as "id_estado"
            FROM dbo.vacaciones AS vaca
            INNER JOIN dbo.trabajador tra on vaca.id_trabajador = tra.id_trabajador
			INNER JOIN dbo.estado e on vaca.id_estado = e.id_estado
            WHERE vaca.id_vaciones = 3

select traba.id_trabajador, traba.dni,traba.nombres,
       traba.apellido_uno, traba.apellido_dos,traba.puesto,
	   a.area,a.id_area
	   from dbo.trabajador as  traba
	   inner join dbo.area a on traba.id_area = a.id_area
	   where traba.id_trabajador=1;
SELECT * FROM dbo.estado;
SELECT * FROM dbo.vacaciones where dbo.vacaciones.id_estado = 1;
SELECT * FROM dbo.trabajador;
SELECT * FROM dbo.estado;
-----------------------------------------------------------------------
```
