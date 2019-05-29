create database empleos_Web;
use empleos_Web;
use exposicion;
DROP DATABASE empleos_Web;

create table tbl_admin(
id_admin int primary key AUTO_INCREMENT comment 'Identificador del administrador',
admin_nombre varchar (100) not null comment 'Nombre del administrador',
admin_email varchar (100) not null comment 'Correo electronico del administrador',
admin_username varchar(100) not null comment 'username para entrar al sistema',
admin_contrasena varchar (100) not null comment 'Contraseña del administrador' ,
usr_tipo varchar (30) not null comment 'tipo de usuario'
);

insert tbl_admin(admin_nombre,admin_email,admin_username,admin_contrasena,usr_tipo)
VALUES ('Jose','Jose@gamil.com',
        'admin','admin','Administrador');  

create table tbl_candidato(
id_candidato int primary key AUTO_INCREMENT comment 'Identificador de candidato',
can_nombre varchar(100) not null comment 'Nombre del candidato',
can_apellido varchar(100) not null comment 'Apellido del candidato',
can_nacimiento date comment 'Fecha de nacimiento',
can_estado_civil varchar(100) comment 'Estado civil',
can_telefono varchar(100) not null comment 'Teléfono de candidato',
can_genero varchar(50) comment 'Género de candidato', 
can_direccion varchar(100) comment 'Dirección del candidato',
can_email varchar(100) not null comment 'Correo electronico del candidato',
can_username varchar(100) not null comment 'username para entrar al sistema',
can_contrasena varchar (100) not null comment 'Contraseña del candidato',
usr_tipo varchar (30) not null comment 'tipo de usuario'
);

insert tbl_candidato(can_nombre,can_apellido,can_nacimiento,can_estado_civil,
		can_telefono,can_genero,can_direccion,can_email,can_username,can_contrasena,usr_tipo)
VALUES ('Jose Guadalupe','Cervera Barbosa','1997-01-18','Soltero','4773962394','Masculino'
		,'Calle Cananea #201 entre blvd. La luz y Montecarlo','Jose.Cerver1@hotmail.com',
        'JCerver','scorpion','Candidato');   
        

         


create table tbl_empresa(
id_empresa int primary key AUTO_INCREMENT comment 'Identificador de empresa',
emp_nombre varchar(100) not null comment 'Nombre de la empresa',
emp_rfc varchar (100) not null comment 'RFC de la empresa',
emp_direccion varchar (100) not null comment 'Dirección de la empresa',
emp_ciudad varchar(50) not null comment 'Ciudad de la empresa',
emp_telefono varchar (100) not null comment 'Teléfono de la empresa',
emp_giroEmpresarial varchar(60) not null comment 'Giro empresarial de la empresa',
emp_descripcion varchar(350) not null comment 'Descrpción de la empresa',
emp_email varchar(100) not null comment 'Correo electronico de la empresa',
emp_username varchar(100) not null comment 'username para entrar al sistema',
emp_contrasena varchar (100) not null comment 'Contraseña de la empresa',
usr_tipo varchar (30) not null comment 'tipo de usuario'
);

insert into tbl_empresa(emp_nombre,emp_rfc,emp_direccion,emp_ciudad,emp_telefono,emp_giroEmpresarial,emp_descripcion,emp_email,emp_username,emp_contrasena,usr_tipo)
values('Microsoft Inc','OTNN790325KL7','blvd. Long Beach','San Diego California','018005432323','Desarrollo de software','Una empresa dedicada a la implementación de soluciones a traves de la tecnología','Microsoft@hotmail.com',
'Microsoft','microsoft','Empresa');

insert into tbl_empresa(emp_nombre,emp_rfc,emp_direccion,emp_ciudad,emp_telefono,emp_giroEmpresarial,emp_descripcion,emp_email,emp_username,emp_contrasena,usr_tipo)
values('Microsoft Inc','OTNN790325KL7','blvd. Long Beach','San Diego California','018005432323','Desarrollo de software','Una empresa dedicada a la implementación de soluciones a traves de la tecnología','Microsoft@hotmail.com',
'yo','yo','Empresa');

select *from tbl_admin;
select *from tbl_candidato; 
select *from tbl_empresa;
select *from tbl_vacante;

SELECT * FROM tbl_candidato where can_username='JCerver' AND can_contrasena='scorpion';
 

update tbl_candidato set usr_tipo='Candidato' where id_candidato=1; 

create table tbl_vacante(
id_vacante int primary key AUTO_INCREMENT comment 'Identificador de una vacante',
fk_id_empresa int not null comment 'Identificador de empresa',
vac_nombre varchar (50) not null comment 'Nombre de la empresa',
vac_puesto varchar (50) not null comment 'Nombre de la oferta de trabajo',
vac_salario double not null comment 'Salario de la oferta de trabajo',
vac_horario varchar(100) not null comment 'Horario de la oferta de trabajo',
vac_requisitos varchar (500) not null comment 'Requisitos a cumplir en la oferta de trabajo',
vac_descripcion varchar (500) not null comment 'Descripción de la oferta de trabajo',
vac_fechaPublicado varchar(100) not null,
foreign key (fk_id_empresa) references tbl_empresa(id_empresa) on update cascade on delete cascade
);

insert into tbl_vacante(fk_id_empresa,vac_nombre,vac_puesto,vac_salario,vac_horario,vac_requisitos,vac_descripcion,vac_fechaPublicado)
values (1,'Desarrollador full-stack','a',8000,'De lunes a viernes de 8:00 a.m a 5:00 p.m','Conocimientos avanzados en leguanjes fornt-end y back-end','Capacitacion constante y excelente ambiente laboral','domingo, 12 de mayo de 2019');

insert into tbl_vacante(fk_id_empresa,vac_nombre,vac_puesto,vac_salario,vac_horario,vac_requisitos,vac_descripcion,vac_fechaPublicado)
values (1,'Administrador de servidores','b',12000,'De lunes a Domingo de 8:00 a.m a 5:00 p.m','Certificacion de uso de tecnologias OWASP','Oportunidad de crecimiento y movilidad','viernes, 10 de mayo de 2019');

select * from tbl_vacante;

DROP PROCEDURE IF EXISTS insertarVacante;
 CREATE PROCEDURE insertarVacante(
   
   emp_nombre varchar(100),
   emp_rfc varchar(100),
   emp_direccion varchar(100),
   emp_ciudad varchar(50),
   emp_telefono varchar(100),
   emp_giroEmpresarial varchar(60),
   emp_descripcion varchar(350),
   emp_email varchar(100),
   emp_username varchar(100),
   emp_contrasena varchar(100),
   usr_tipo varchar(30)
 )
 insert into tbl_empresa(emp_nombre,emp_rfc,emp_direccion,emp_ciudad,emp_telefono,emp_giroEmpresarial,emp_descripcion,emp_email,emp_username,emp_contrasena,usr_tipo) values (emp_nombre,emp_rfc,emp_direccion,emp_ciudad,emp_telefono,
 emp_giroEmpresarial,emp_descripcion,emp_email,emp_username,emp_contrasena,usr_tipo);


/*HASTA AQUI HE CREADO LAS TABLAS*/


create table tbl_curriculum(
id_curriculum int primary key AUTO_INCREMENT comment 'Identificador del curriculum',
fk_id_candidato int not null comment 'Identificador de candidato',
cur_cargo varchar (100) not null comment 'El puesto que cubre el candidato',
cur_estudios varchar (250) not null comment 'Los estudios que tiene el candidato',
cur_conocimiento varchar (500) not null comment 'Que temas dominda, tecnologia, idiomas, etc.',
cur_descripcion varchar (500) not null comment 'Descrpción del candidato, de sus habilidades, valores, etc.',
foreign key (fk_id_candidato) references tbl_candidato (id_candidato)  on update cascade on delete cascade
);

create table tbl_curso(
id_curso smallint primary key not null auto_increment comment 'Identificador del curso',
fk_id_empresa varchar (100) not null comment 'Identificador de empresa',
cur_nombre varchar(50) not null comment 'Nombre del curso',
cur_empresa varchar(50) not null comment 'Empresa que imparte el curso',
cur_tipo varchar(50) not null comment 'Tipo de curso',
cur_fecha varchar(100) not null comment 'Fecha del curso',
cur_direccion varchar (70) not null comment 'Direción del curso',
cur_duracion varchar (70) not null comment 'Tiempo que dura del curso',
cur_horario varchar(50) not null comment 'Horario del curso',
cur_descripcion varchar (300) not null comment 'Descripción del curso',
foreign key (fk_id_empresa) references tbl_empresa (id_empresa) on update cascade on delete cascade
);

select * from tbl_curso;


create table tbl_postulados(
id_vacante int primary key AUTO_INCREMENT comment 'Identificador de vacante',
id_candidato int primary key AUTO_INCREMENT comment 'Identificador de candidato',
foreign key (id_candidato) references tbl_candidato (id_candidato)  on update cascade on delete cascade,
foreign key (id_vacante) references tbl_vacante (id_vacante)  on update cascade on delete cascade
);

/*PROCEDIMIENTOS ALMACENADOS PARA VISUALIZAR RESULTADOS*/
DROP PROCEDURE IF EXISTS getAllVacantes;
CREATE PROCEDURE getAllVacantes()
select v.id_vacante,v.fk_id_empresa,v.vac_nombre,v.vac_salario,v.vac_horario,v.vac_requisitos,v.vac_descripcion,v.vac_fechaPublicado,e.emp_nombre,e.emp_ciudad from tbl_vacante v inner join tbl_empresa e on v.fk_id_empresa=e.id_empresa;
call getAllVacantes();


DROP PROCEDURE IF EXISTS insertarEmpresa;
 CREATE PROCEDURE insertarEmpresa(
   
   emp_nombre varchar(100),
   emp_rfc varchar(100),
   emp_direccion varchar(100),
   emp_ciudad varchar(50),
   emp_telefono varchar(100),
   emp_giroEmpresarial varchar(60),
   emp_descripcion varchar(350),
   emp_email varchar(100),
   emp_username varchar(100),
   emp_contrasena varchar(100),
   usr_tipo varchar(30)
 )
 insert into tbl_empresa(emp_nombre,emp_rfc,emp_direccion,emp_ciudad,emp_telefono,emp_giroEmpresarial,emp_descripcion,emp_email,emp_username,emp_contrasena,usr_tipo) values (emp_nombre,emp_rfc,emp_direccion,emp_ciudad,emp_telefono,
 emp_giroEmpresarial,emp_descripcion,emp_email,emp_username,emp_contrasena,usr_tipo);
 
call insertarEmpresa('Rhyno Systems','RONA799925NM1','blvd. Adolfo Lopez Mateos','Leon, Guanajuato','4771233434','ciberseguridad','Una empresa dedicada a la implementación de soluciones a traves de tecnologías para proteccion de datos sensibles de multiples empresas','Rhyno@gmail.com',
'Rhyno','123456','Empresa');
 
