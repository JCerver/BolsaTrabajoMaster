-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 24-05-2019 a las 20:21:51
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
DROP database IF EXISTS bolsatrabajo;
CREATE database bolsatrabajo;
use bolsatrabajo;

--
-- Base de datos: `bolsatrabajo`
--

DELIMITER $$
--
-- Procedimientos
--
DROP PROCEDURE IF EXISTS `getAllVacantes`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `getAllVacantes` ()  select v.id_vacante,v.fk_id_empresa,v.vac_nombre,v.vac_puesto,v.vac_salario,v.vac_horario,v.vac_requisitos,v.vac_descripcion,v.vac_fechaPublicado,e.emp_nombre,e.emp_ciudad from tbl_vacante v inner join tbl_empresa e on v.fk_id_empresa=e.id_empresa$$

DROP PROCEDURE IF EXISTS `insertarEmpresa`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertarEmpresa` (`emp_nombre` VARCHAR(100), `emp_rfc` VARCHAR(100), `emp_direccion` VARCHAR(100), `emp_ciudad` VARCHAR(50), `emp_telefono` VARCHAR(100), `emp_giroEmpresarial` VARCHAR(60), `emp_descripcion` VARCHAR(350), `emp_email` VARCHAR(100), `emp_username` VARCHAR(100), `emp_contrasena` VARCHAR(100), `usr_tipo` VARCHAR(30))  insert into tbl_empresa(emp_nombre,emp_rfc,emp_direccion,emp_ciudad,emp_telefono,emp_giroEmpresarial,emp_descripcion,emp_email,emp_username,emp_contrasena,usr_tipo) values (emp_nombre,emp_rfc,emp_direccion,emp_ciudad,emp_telefono,
 emp_giroEmpresarial,emp_descripcion,emp_email,emp_username,emp_contrasena,usr_tipo)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del administrador',
  `admin_nombre` varchar(100) NOT NULL COMMENT 'Nombre del administrador',
  `admin_email` varchar(100) NOT NULL COMMENT 'Correo electronico del administrador',
  `admin_username` varchar(100) NOT NULL COMMENT 'username para entrar al sistema',
  `admin_contrasena` varchar(100) NOT NULL COMMENT 'Contraseña del administrador',
  `usr_tipo` varchar(30) NOT NULL COMMENT 'tipo de usuario',
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `admin_nombre`, `admin_email`, `admin_username`, `admin_contrasena`, `usr_tipo`) VALUES
(1, 'Jose', 'Jose@gamil.com', 'admin', 'admin', 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_candidato`
--

DROP TABLE IF EXISTS `tbl_candidato`;
CREATE TABLE IF NOT EXISTS `tbl_candidato` (
  `id_candidato` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de candidato',
  `can_nombre` varchar(100) NOT NULL COMMENT 'Nombre del candidato',
  `can_apellido` varchar(100) NOT NULL COMMENT 'Apellido del candidato',
  `can_nacimiento`  varchar(100)  NULL COMMENT 'Fecha de nacimiento',
  `can_estado_civil` varchar(100) DEFAULT NULL COMMENT 'Estado civil',
  `can_telefono` varchar(100) NOT NULL COMMENT 'Teléfono de candidato',
  `can_genero` varchar(50) DEFAULT NULL COMMENT 'Género de candidato',
  `can_direccion` varchar(100) DEFAULT NULL COMMENT 'Dirección del candidato',
  `can_email` varchar(100) NOT NULL COMMENT 'Correo electronico del candidato',
  `can_username` varchar(100) NOT NULL COMMENT 'username para entrar al sistema',
  `can_contrasena` varchar(100) NOT NULL COMMENT 'Contraseña del candidato',
  `usr_tipo` varchar(30) NOT NULL COMMENT 'tipo de usuario',
  `estado_curriculum` varchar(1) NOT NULL COMMENT 'Validar si ya tiene un curriculum',
  PRIMARY KEY (`id_candidato`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_candidato`
--

INSERT INTO `tbl_candidato` (`id_candidato`, `can_nombre`, `can_apellido`, `can_nacimiento`, `can_estado_civil`, `can_telefono`, `can_genero`, `can_direccion`, `can_email`, `can_username`, `can_contrasena`, `usr_tipo`, `estado_curriculum`) VALUES
(1, 'Jose Guadalupe', 'Cervera Barbosa', '1997-01-18', 'Soltero', '4773962394', 'Masculino', 'Calle Cananea #201 entre blvd. La luz y Montecarlo', 'Jose.Cerver1@hotmail.com', 'JCerver', 'scorpion', 'Candidato', '0'),
(2, 'Jasiel', 'Galvan', NULL, NULL, '4773962394', NULL, NULL, 'jas123@hotmail.com', 'jass', '1234', 'Candidato', '1'),
(3, 'Paul Jasiel', 'García', NULL, NULL, '4777538091', NULL, NULL, 'jasielgalvan@hotmail.com', 'jass', '1234', 'Candidato', '0'),
(4, 'paul', 'esparza', NULL, NULL, '1234567899', NULL, NULL, 'poolesparza@hotmail.com', 'pool', '1234', 'Candidato', '0'),
(5, 'candidato', 'candidato', NULL, NULL, '123213', NULL, NULL, 'candiadto@hotmail.com', 'candy', 'candy', 'Candidato', '0'),
(6, 'Paul', 'García', NULL, NULL, '4778967565', NULL, NULL, 'dj.jasiel18@gmail.com', 'jasiel2', 'jasiel2', 'Candidato', '0'),
(7, 'asd', 'asd', NULL, NULL, '2321312312', NULL, NULL, 'asd@gmail.com', 'asd1', 'asd2', 'Candidato', '1'),
(8, 'armando', 'diaz', NULL, NULL, '4771234567', NULL, NULL, 'jasielgalvan@hotmail.com', 'armin1', 'armin1', 'Candidato', '1'),
(9, 'j', 'j', NULL, NULL, '7555666', NULL, NULL, 'j', 'jjj', 'jjj', 'Candidato', '1'),
(10, 'tocayo', 'tocayo', NULL, NULL, '564646446', NULL, NULL, 'tocayo', 'tocayo', 'tocayo', 'Candidato', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_curriculum`
--

DROP TABLE IF EXISTS `tbl_curriculum`;
CREATE TABLE IF NOT EXISTS `tbl_curriculum` (
  `id_curriculum` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del curriculum',
  `fk_id_candidato` int(11) NOT NULL COMMENT 'Identificador de candidato',
  `cur_cargo` varchar(100) NOT NULL COMMENT 'El puesto que cubre el candidato',
  `cur_estudios` varchar(250) NOT NULL COMMENT 'Los estudios que tiene el candidato',
  `cur_conocimiento` varchar(500) NOT NULL COMMENT 'Que temas dominda, tecnologia, idiomas, etc.',
  `cur_descripcion` varchar(500) NOT NULL COMMENT 'Descrpción del candidato, de sus habilidades, valores, etc.',
  PRIMARY KEY (`id_curriculum`),
  KEY `fk_id_candidato` (`fk_id_candidato`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_curriculum`
--

INSERT INTO `tbl_curriculum` (`id_curriculum`, `fk_id_candidato`, `cur_cargo`, `cur_estudios`, `cur_conocimiento`, `cur_descripcion`) VALUES
(1, 2, 'DJ', 'Preparatoria', 'Musica, Alcohol, Desmadre', 'sadadad'),
(2, 7, 'DJ', 'Preparatoria', 'Musica', 'mucha música'),
(3, 8, 'Empresario', 'Universidad', 'bastantes', 'Bueno en todo'),
(4, 9, 'jjj', 'jjj', 'jjj', 'jjj');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_curso`
--

DROP TABLE IF EXISTS `tbl_curso`;
CREATE TABLE IF NOT EXISTS `tbl_curso` (
  `id_curso` smallint(6) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del curso',
  `fk_id_empresa` varchar(100) NOT NULL COMMENT 'Identificador de empresa',
  `cur_nombre` varchar(50) NOT NULL COMMENT 'Nombre del curso',
  `cur_empresa` varchar(50) NOT NULL COMMENT 'Empresa que imparte el curso',
  `cur_tipo` varchar(50) NOT NULL COMMENT 'Tipo de curso',
  `cur_fechaInicio` varchar(100) NOT NULL COMMENT 'Fecha del curso',
  `cur_fechaFinal` varchar(100) NOT NULL COMMENT 'Fecha del curso',
  `cur_direccion` varchar(70) NOT NULL COMMENT 'Direción del curso',
  `cur_duracion` varchar(70) NOT NULL COMMENT 'Tiempo que dura del curso',
  `cur_horario` varchar(50) NOT NULL COMMENT 'Horario del curso',
  `cur_descripcion` varchar(300) NOT NULL COMMENT 'Descripción del curso',
  `cur_costo` double not null comment 'Costo del curso',
  `cur_personas` varchar(100) not null comment 'personas a los que va dirigido',
  `cur_categoria` varchar(50),
  `cur_ubicacion` varchar(1000),
  PRIMARY KEY (`id_curso`),
  KEY `fk_id_empresa` (`fk_id_empresa`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_empresa`
--

DROP TABLE IF EXISTS `tbl_empresa`;
CREATE TABLE IF NOT EXISTS `tbl_empresa` (
  `id_empresa` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de empresa',
  `emp_nombre` varchar(100) NOT NULL COMMENT 'Nombre de la empresa',
  `emp_rfc` varchar(100) NOT NULL COMMENT 'RFC de la empresa',
  `emp_direccion` varchar(100) NOT NULL COMMENT 'Dirección de la empresa',
  `emp_ciudad` varchar(50) NOT NULL COMMENT 'Ciudad de la empresa',
  `emp_telefono` varchar(100) NOT NULL COMMENT 'Teléfono de la empresa',
  `emp_giroEmpresarial` varchar(60) NOT NULL COMMENT 'Giro empresarial de la empresa',
  `emp_descripcion` varchar(350) NOT NULL COMMENT 'Descrpción de la empresa',
  `emp_email` varchar(100) NOT NULL COMMENT 'Correo electronico de la empresa',
  `emp_username` varchar(100) NOT NULL COMMENT 'username para entrar al sistema',
  `emp_contrasena` varchar(100) NOT NULL COMMENT 'Contraseña de la empresa',
  `usr_tipo` varchar(30) NOT NULL COMMENT 'tipo de usuario',
  PRIMARY KEY (`id_empresa`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_empresa`
--

INSERT INTO `tbl_empresa` (`id_empresa`, `emp_nombre`, `emp_rfc`, `emp_direccion`, `emp_ciudad`, `emp_telefono`, `emp_giroEmpresarial`, `emp_descripcion`, `emp_email`, `emp_username`, `emp_contrasena`, `usr_tipo`) VALUES
(1, 'Microsoft Inc', 'OTNN790325KL7', 'blvd. Long Beach', 'San Diego California', '018005432323', 'Desarrollo de software', 'Una empresa dedicada a la implementación de soluciones a traves de la tecnología', 'Microsoft@hotmail.com', 'Microsoft', 'microsoft', 'Empresa'),
(2, 'Microsoft Inc', 'OTNN790325KL7', 'blvd. Long Beach', 'San Diego California', '018005432323', 'Desarrollo de software', 'Una empresa dedicada a la implementación de soluciones a traves de la tecnología', 'Microsoft@hotmail.com', 'yo', 'yo', 'Empresa'),
(3, 'Rhyno Systems', 'RONA799925NM1', 'blvd. Adolfo Lopez Mateos', 'Leon, Guanajuato', '4771233434', 'ciberseguridad', 'Una empresa dedicada a la implementación de soluciones a traves de tecnologías para proteccion de datos sensibles de multiples empresas', 'Rhyno@gmail.com', 'Rhyno', '123456', 'Empresa'),
(4, 'eee', 'eee', 'eee', 'eee', '849494', 'Educación', 'eee', 'eee', 'eee', 'eee', 'Empresa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_postulados`
--

DROP TABLE IF EXISTS `tbl_postulados`;
CREATE TABLE IF NOT EXISTS `tbl_postulados` (
  `id_postulado` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de postulados',
  `fk_id_vacante` int(11) NOT NULL COMMENT 'Identificador de vacante',
  `fk_id_candidato` int(11) NOT NULL COMMENT 'Identificador de candidato',
  PRIMARY KEY (`id_postulado`),
  KEY `fk_id_candidato` (`fk_id_candidato`),
  KEY `fk_id_vacante` (`fk_id_vacante`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_vacante`
--

DROP TABLE IF EXISTS `tbl_vacante`;
CREATE TABLE IF NOT EXISTS `tbl_vacante` (
  `id_vacante` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de una vacante',
  `fk_id_empresa` int(11) NOT NULL COMMENT 'Identificador de empresa',
  `vac_nombre` varchar(50) NOT NULL COMMENT 'Nombre de la empresa',
  `vac_puesto` varchar(50) NOT NULL COMMENT 'Nombre de la oferta de trabajo',
  `vac_salario` double NOT NULL COMMENT 'Salario de la oferta de trabajo',
  `vac_horario` varchar(100) NOT NULL COMMENT 'Horario de la oferta de trabajo',
  `vac_ubicacion` varchar(1000) NOT NULL,
  `vac_requisitos` varchar(500) NOT NULL COMMENT 'Requisitos a cumplir en la oferta de trabajo',
  `vac_descripcion` varchar(500) NOT NULL COMMENT 'Descripción de la oferta de trabajo',
  `vac_fechaPublicado` varchar(100) NOT NULL,
  PRIMARY KEY (`id_vacante`),
  KEY `fk_id_empresa` (`fk_id_empresa`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

select*from tbl_vacante;

call getAllVacantes();
--
-- Volcado de datos para la tabla `tbl_vacante`
--

INSERT INTO `tbl_vacante` (`id_vacante`, `fk_id_empresa`, `vac_nombre`, `vac_puesto`, `vac_salario`, `vac_horario`, `vac_requisitos`, `vac_descripcion`, `vac_fechaPublicado`) VALUES
(1, 1, 'Desarrollador full-stack', 'a', 8000, 'De lunes a viernes de 8:00 a.m a 5:00 p.m', 'Conocimientos avanzados en leguanjes fornt-end y back-end', 'Capacitacion constante y excelente ambiente laboral', 'domingo, 12 de mayo de 2019'),
(2, 1, 'Administrador de servidores', 'b', 12000, 'De lunes a Domingo de 8:00 a.m a 5:00 p.m', 'Certificacion de uso de tecnologias OWASP', 'Oportunidad de crecimiento y movilidad', 'viernes, 10 de mayo de 2019');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

DROP PROCEDURE IF EXISTS getVacantePorID;
CREATE PROCEDURE getVacantePorID(clave int)
select v.id_vacante,v.fk_id_empresa,v.vac_nombre,v.vac_puesto,v.vac_salario,v.vac_horario,v.vac_ubicacion,v.vac_requisitos,v.vac_descripcion,v.vac_fechaPublicado,e.emp_nombre,e.emp_ciudad,e.emp_direccion,e.emp_giroEmpresarial,e.emp_descripcion,e.emp_telefono,e.emp_email  from tbl_vacante v inner join tbl_empresa e on v.fk_id_empresa=e.id_empresa where v.id_vacante=clave;
call getVacantePorID(7);

DROP PROCEDURE IF EXISTS insertarCurso;
 CREATE PROCEDURE insertarCurso(
   fk_id_empresa int,
   cur_nombre varchar(50),
	cur_fechaInicio varchar(100),
    cur_fechaFinal varchar(100),
   cur_duracion varchar(100),
   cur_direccion varchar(70),
   cur_descripcion varchar(300),
   cur_tipo varchar(30),
   cur_costo double,
   cur_personas varchar(100), 
   cur_empresa varchar(100),
   cur_categoria varchar(50),
   cur_horario varchar(50),
   cur_ubicacion varchar(1000)
 )
 insert into tbl_curso(fk_id_empresa,cur_nombre,cur_fechaInicio,cur_fechaFinal,cur_duracion,cur_direccion,cur_descripcion,cur_tipo,cur_costo,cur_personas,cur_empresa,cur_categoria,cur_horario,cur_ubicacion) values (fk_id_empresa,cur_nombre,cur_fechaInicio,cur_fechaFinal,cur_duracion,cur_direccion,cur_descripcion,cur_tipo,cur_costo,cur_personas,cur_empresa,cur_categoria,cur_horario,cur_ubicacion);
 
 DROP PROCEDURE IF EXISTS getAllCursos;
 CREATE PROCEDURE getAllCursos()
 select * from tbl_curso 
 order by id_curso DESC limit 5;
 
 call getAllCursos();
 
 
  DROP PROCEDURE IF EXISTS getCursosPorID;
 CREATE PROCEDURE getCursosPorID(clave int)
 select * from tbl_curso where id_curso=clave;

 call getCursosPorID(6);
 
   DROP PROCEDURE IF EXISTS getCursosPorCategoria;
 CREATE PROCEDURE getCursosPorCategoria(clave varchar(30))
 select * from tbl_curso where cur_categoria=clave;
 
 call getCursosPorCategoria('Ingenieria');
 
 /*Empieza la parte de pablo*/
 
 DROP PROCEDURE IF EXISTS getVacantePorNombre;
CREATE PROCEDURE getVacantePorNombre(xpalabra varchar(40))
select v.id_vacante,v.fk_id_empresa,v.vac_nombre,v.vac_requisitos,v.vac_descripcion,v.vac_fechaPublicado,e.emp_nombre,e.emp_ciudad from tbl_vacante v inner join tbl_empresa e on v.fk_id_empresa=e.id_empresa where v.vac_nombre LIKE xpalabra;


call getVacantePorNombre('Admin%');

select * from tbl_vacante where vac_nombre like "Admin%";

 
DROP PROCEDURE IF EXISTS getVacantePorEmpresa;
CREATE PROCEDURE getVacantePorEmpresa(xempresa varchar(40))
select v.id_vacante,v.fk_id_empresa,v.vac_nombre,v.vac_requisitos,v.vac_descripcion,v.vac_fechaPublicado,e.emp_nombre,e.emp_ciudad from tbl_vacante v inner join tbl_empresa e on v.fk_id_empresa=e.id_empresa where e.emp_nombre LIKE xempresa;

call getVacantePorEmpresa('Micro%');
 
 select * from tbl_empresa where emp_nombre like "Micro%";
 
 
 
DROP PROCEDURE IF EXISTS getVacantePorVacanteEmpresa;
CREATE PROCEDURE getVacantePorVacanteEmpresa(xpalabra varchar(40), xempresa varchar(40))
select v.id_vacante,v.fk_id_empresa,v.vac_nombre,v.vac_requisitos,v.vac_descripcion,v.vac_fechaPublicado,e.emp_nombre,e.emp_ciudad 
from tbl_vacante v inner join tbl_empresa e on v.fk_id_empresa=e.id_empresa where e.emp_nombre LIKE xempresa AND v.vac_nombre LIKE xpalabra;



DROP PROCEDURE IF EXISTS getVacantePorSueldo1;
CREATE PROCEDURE getVacantePorSueldo1()
select v.id_vacante,v.fk_id_empresa,v.vac_nombre,v.vac_requisitos,v.vac_descripcion,v.vac_fechaPublicado,e.emp_nombre,e.emp_ciudad 
from tbl_vacante v inner join tbl_empresa e on v.fk_id_empresa=e.id_empresa where v.vac_salario >= 0 AND v.vac_salario <= 5000;

call getVacantePorSueldo1();

DROP PROCEDURE IF EXISTS getVacantePorSueldo2;
CREATE PROCEDURE getVacantePorSueldo2()
select v.id_vacante,v.fk_id_empresa,v.vac_nombre,v.vac_requisitos,v.vac_descripcion,v.vac_fechaPublicado,e.emp_nombre,e.emp_ciudad 
from tbl_vacante v inner join tbl_empresa e on v.fk_id_empresa=e.id_empresa where v.vac_salario >= 5001 AND v.vac_salario <= 10000;

DROP PROCEDURE IF EXISTS getVacantePorSueldo3;
CREATE PROCEDURE getVacantePorSueldo3()
select v.id_vacante,v.fk_id_empresa,v.vac_nombre,v.vac_requisitos,v.vac_descripcion,v.vac_fechaPublicado,e.emp_nombre,e.emp_ciudad 
from tbl_vacante v inner join tbl_empresa e on v.fk_id_empresa=e.id_empresa where v.vac_salario >= 10001;

DROP PROCEDURE IF EXISTS getVacantePorSueldoEmpresa1;
CREATE PROCEDURE getVacantePorSueldoEmpresa1(xempresa varchar(40))
select v.id_vacante,v.fk_id_empresa,v.vac_nombre,v.vac_requisitos,v.vac_descripcion,v.vac_fechaPublicado,e.emp_nombre,e.emp_ciudad 
from tbl_vacante v inner join tbl_empresa e on v.fk_id_empresa=e.id_empresa 
where e.emp_nombre like xempresa and v.vac_salario >= 0 AND v.vac_salario <= 5000;

DROP PROCEDURE IF EXISTS getVacantePorSueldoEmpresa2;
CREATE PROCEDURE getVacantePorSueldoEmpresa2(xempresa varchar(40))
select v.id_vacante,v.fk_id_empresa,v.vac_nombre,v.vac_requisitos,v.vac_descripcion,v.vac_fechaPublicado,e.emp_nombre,e.emp_ciudad 
from tbl_vacante v inner join tbl_empresa e on v.fk_id_empresa=e.id_empresa 
where e.emp_nombre like xempresa and v.vac_salario >= 5001 AND v.vac_salario <= 10000;

DROP PROCEDURE IF EXISTS getVacantePorSueldoEmpresa3;
CREATE PROCEDURE getVacantePorSueldoEmpresa3(xempresa varchar(40))
select v.id_vacante,v.fk_id_empresa,v.vac_nombre,v.vac_requisitos,v.vac_descripcion,v.vac_fechaPublicado,e.emp_nombre,e.emp_ciudad 
from tbl_vacante v inner join tbl_empresa e on v.fk_id_empresa=e.id_empresa 
where e.emp_nombre like xempresa and v.vac_salario >= 10001;

call getVacantePorSueldoEmpresa2('%mic%');


DROP PROCEDURE IF EXISTS getVacantePorSueldoGiro1;
CREATE PROCEDURE getVacantePorSueldoGiro1(xgiro varchar(40))
select v.id_vacante,v.fk_id_empresa,v.vac_nombre,v.vac_requisitos,v.vac_descripcion,v.vac_fechaPublicado,e.emp_nombre,e.emp_ciudad 
from tbl_vacante v inner join tbl_empresa e on v.fk_id_empresa=e.id_empresa 
where e.emp_giroEmpresarial = xgiro and v.vac_salario >= 0 AND v.vac_salario <= 5000;

DROP PROCEDURE IF EXISTS getVacantePorSueldoGiro2;
CREATE PROCEDURE getVacantePorSueldoGiro2(xgiro varchar(40))
select v.id_vacante,v.fk_id_empresa,v.vac_nombre,v.vac_requisitos,v.vac_descripcion,v.vac_fechaPublicado,e.emp_nombre,e.emp_ciudad 
from tbl_vacante v inner join tbl_empresa e on v.fk_id_empresa=e.id_empresa 
where e.emp_giroEmpresarial = xgiro and v.vac_salario >= 5001 AND v.vac_salario <= 10000;

DROP PROCEDURE IF EXISTS getVacantePorSueldoGiro3;
CREATE PROCEDURE getVacantePorSueldoGiro3(xgiro varchar(40))
select v.id_vacante,v.fk_id_empresa,v.vac_nombre,v.vac_requisitos,v.vac_descripcion,v.vac_fechaPublicado,e.emp_nombre,e.emp_ciudad 
from tbl_vacante v inner join tbl_empresa e on v.fk_id_empresa=e.id_empresa 
where e.emp_giroEmpresarial = xgiro and v.vac_salario >= 10001;

call getVacantePorSueldoGiro1('Educación');


DROP PROCEDURE IF EXISTS getVacantePorGiro;
CREATE PROCEDURE getVacantePorGiro(xgiro varchar(40))
select v.id_vacante,v.fk_id_empresa,v.vac_nombre,v.vac_requisitos,v.vac_descripcion,v.vac_fechaPublicado,e.emp_nombre,e.emp_ciudad 
from tbl_vacante v inner join tbl_empresa e on v.fk_id_empresa=e.id_empresa 
where e.emp_giroEmpresarial = xgiro;

call getVacantePorGiro('Educación');


DROP PROCEDURE IF EXISTS getVacantePorVacanteSueldoEmpresa1;
CREATE PROCEDURE getVacantePorVacanteSueldoEmpresa1(xpalabra varchar(40), xempresa varchar(40))
select v.id_vacante,v.fk_id_empresa,v.vac_nombre,v.vac_requisitos,v.vac_descripcion,v.vac_fechaPublicado,e.emp_nombre,e.emp_ciudad 
from tbl_vacante v inner join tbl_empresa e on v.fk_id_empresa=e.id_empresa 
where e.emp_nombre LIKE xempresa AND v.vac_nombre LIKE xpalabra and v.vac_salario >= 0 AND v.vac_salario <= 5000;

DROP PROCEDURE IF EXISTS getVacantePorVacanteSueldoEmpresa2;
CREATE PROCEDURE getVacantePorVacanteSueldoEmpresa2(xpalabra varchar(40), xempresa varchar(40))
select v.id_vacante,v.fk_id_empresa,v.vac_nombre,v.vac_requisitos,v.vac_descripcion,v.vac_fechaPublicado,e.emp_nombre,e.emp_ciudad 
from tbl_vacante v inner join tbl_empresa e on v.fk_id_empresa=e.id_empresa 
where e.emp_nombre LIKE xempresa AND v.vac_nombre LIKE xpalabra and v.vac_salario >= 5001 AND v.vac_salario <= 10000;

DROP PROCEDURE IF EXISTS getVacantePorVacanteSueldoEmpresa3;
CREATE PROCEDURE getVacantePorVacanteSueldoEmpresa3(xpalabra varchar(40), xempresa varchar(40))
select v.id_vacante,v.fk_id_empresa,v.vac_nombre,v.vac_requisitos,v.vac_descripcion,v.vac_fechaPublicado,e.emp_nombre,e.emp_ciudad 
from tbl_vacante v inner join tbl_empresa e on v.fk_id_empresa=e.id_empresa 
where e.emp_nombre LIKE xempresa AND v.vac_nombre LIKE xpalabra AND v.vac_salario >= 10001;

call getVacantePorVacanteSueldoEmpresa3('%serv%','%micro%');



DROP PROCEDURE IF EXISTS getVacantePorVacanteSueldo;
CREATE PROCEDURE getVacantePorVacanteEmpresa(xpalabra varchar(40), xempresa varchar(40))
select v.id_vacante,v.fk_id_empresa,v.vac_nombre,v.vac_requisitos,v.vac_descripcion,v.vac_fechaPublicado,e.emp_nombre,e.emp_ciudad 
from tbl_vacante v inner join tbl_empresa e on v.fk_id_empresa=e.id_empresa where e.emp_nombre LIKE xempresa AND v.vac_nombre LIKE xpalabra;



SELECT * FROM t1 WHERE column1 = (SELECT column1 FROM t2);

 
call getVacantePorVacanteEmpresa('%rh%','%sys%');
 

 
SELECT * FROM tbl_vacante WHERE vac_fechaPublicado BETWEEN DATE_SUB(NOW(), INTERVAL 3 day) AND NOW(); 
 
 select * from tbl_vacante;
 
 INSERT INTO `tbl_vacante` (`id_vacante`, `fk_id_empresa`, `vac_nombre`, `vac_puesto`, `vac_salario`, `vac_horario`, `vac_requisitos`, `vac_descripcion`, `vac_fechaPublicado`) VALUES
(3, 1, 'Gerente de ventas', 'Gerente', 10000, 'De lunes a viernes de 8:00 a.m a 5:00 p.m', 'Conocimientos avanzados en leguanjes fornt-end y back-end', 'Capacitacion constante y excelente ambiente laboral',),
(4, 1, 'Practicante', 'Asistente', 7000, 'De lunes a Domingo de 8:00 a.m a 5:00 p.m', 'Certificacion de uso de tecnologias OWASP', 'Oportunidad de crecimiento y movilidad', 'jueves');
COMMIT;
 
 
 
 select *from tbl_admin;
select *from tbl_candidato; 
select *from tbl_empresa;
select *from tbl_vacante;
select *from tbl_curso;
select *from tbl_curriculum;
select *from tbl_postulados;



