create database Hotel_Paradise;
use Hotel_Paradise;
create table Tipo_usuario(
	Id_tipo_usu int(2) primary key auto_increment,
    Tipo_usuario varchar(20) not null
);

select * from tipo_usuario;
insert into tipo_usuario values (1,'Administrador'),(2,'Recepcionista'),(3,'Cliente');

create table usuario(
	id_usuario int(10) primary key auto_increment,
    nombre varchar(30) not null,
    apellido varchar(30) not null,
    email varchar(80) not null,
    tipo_doc varchar(20) not null,
    documento int(10) not null,
    telefono int(10) not null,
    fecha_nac date not null,
    contraseña varchar(130) not null,
    id_tipo_usu int(2) not null
);

select * from usuario;

alter table usuario add constraint fk_tipo_usuario foreign key (id_tipo_usu) references tipo_usuario(id_tipo_usu);

create table tipo_hab (
	id_tipo_hab int(2) primary key auto_increment not null,
    tipo_hab varchar(50) not null
);

create table disponibilidad(
	id_disponibilidad int(2) primary key auto_increment not null,
    disponibilidad varchar(20) not null
);

create table habitacion(
	num_habitacion int(3) primary key not null,
    descripcion varchar(500) not null,
    precio decimal(10,2) not null,
    imagen longblob not null,
    id_tipo_hab int(2) not null,
	id_disponibilidad int(2) not null,
    foreign key (id_tipo_hab) references tipo_hab(id_tipo_hab),
    foreign key (id_disponibilidad) references disponibilidad(id_disponibilidad)
);

insert into tipo_usuario values (1, 'Administrador'),(2,'Recepcionista'),(3,'Cliente');

select * from tipo_usuario;

insert into tipo_hab values (1, 'Simple'),(2,'Doble'),(3,'Matrimonial');

select * from tipo_hab;

insert into disponibilidad values (1,'Disponible'),(2,'Ocupado');

select * from disponibilidad;

insert into habitacion values (001, 'Vista al mar', 250000.00, '',1,1);

select * from habitacion;