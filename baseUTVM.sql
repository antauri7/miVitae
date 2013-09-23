create database utvm;

use utvm;

create table userAlumno(
matricula varchar (10) primary key,
nombre varchar (30) not null,
aPaterno varchar (30) not null,
aMaterno varchar (30) not null,
password varchar (100) not null,
grado int (3) not null,
grupo varchar (3) not null
);

insert into userAlumno Values ('093494','Miguel Angel','Flores','Bautista','123','10','B');

create table calificacion
(
id int auto_increment primary key,
matricula varchar (6) not null,
materia varchar (120) not null,
unidades int (2) not null,
unidad1 varchar (4) null,
unidad2 varchar (4) null,
unidad3 varchar (4) null,
unidad4 varchar (4) null,
unidad5 varchar (4) null,
unidad6 varchar (4) null,
periodo varchar (50) not null
);


insert into calificacion (matricula, materia, unidades, unidad1, unidad2, unidad3, unidad4, unidad5, unidad6, periodo) VALUES ('093494','Planeacion y Organizacion del Trabajo','4','9.1','9.2','8.4','8.4','','','Enero-Febrero'),
('093494','Estadistica Aplicada','3','8.1','9.2','9.4','','','','Enero-Febrero'),
('093494','AdministraciÛn de proyectos de TI II','5','8.1','8.2','9.4','9.4','10','','Enero-Febrero'),
('093494','Base de Datos para Aplicaciones','4','9.1','9.2','8.4','8.4','','','Enero-Febrero'),
('093494','Redes convergentes','5','8.1','8.2','9.4','9.4','10','','Enero-Febrero'),
('093494','InglÈs II','5','8.1','8.2','8.4','8.4','8','','Enero-Febrero');
