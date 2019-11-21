create database boliche;
use boliche;

create table torneo (id_torneo int auto_increment, 
	nombre varchar(150), 
	fecha_inicio date, 
	fecha_final date, 
    numero_sesiones varchar(150),
	primary key(id_torneo));
ALTER TABLE torneo CONVERT TO CHARACTER SET utf8;






insert into torneo (nombre,fecha_inicio,fecha_final,numero_sesiones) values ('Dallas y Cobras','2019-08-22','2019-10-22','5'),
													('Don Gato y su Pa','2019-08-22','2019-10-22', '8'),
													('Tenpin','2019-08-22','2019-10-22','4');

create table equipo (id_equipo int auto_increment, 
	nombre_equipo varchar(150), 
	puntos int, 
	total_pinos int,
	primary key(id_equipo));
ALTER TABLE equipo CONVERT TO CHARACTER SET utf8;






insert into equipo (nombre_equipo,puntos,total_pinos) values ('Strikers','12','4384'),
													('No era para eso','12','4228'),
													('Raiders','11','4249');



create table jugador (id_jugador int auto_increment, 
	nombre_jugador varchar(150), 
	promedio int, 
	handicap int,
    numero_lineas int,
    pinos_jugador int,
	primary key(id_jugador));
ALTER TABLE jugador CONVERT TO CHARACTER SET utf8;



insert into jugador (nombre_jugador,promedio,handicap,numero_lineas,pinos_jugador) values ('Ricardo Leucona','1426','6', '237','0'),
													('Jorge Salgado','1424','6','237','0'),
													('Rodrigo Garcia','1410','6','235','0');
                                                    
                                                    
                                                    
                                                    
                                                    
CREATE TABLE torneo_equipo (
    id_torneo int,
    id_equipo int,
    FOREIGN KEY (id_torneo) REFERENCES torneo(id_torneo),
    FOREIGN KEY (id_equipo) REFERENCES equipo(id_equipo)
);

CREATE TABLE equipo_jugador (
    id_equipo int,
    id_jugador int,
    FOREIGN KEY (id_equipo) REFERENCES equipo(id_equipo) ON DELETE CASCADE,
    FOREIGN KEY (id_jugador) REFERENCES jugador(id_jugador) ON DELETE CASCADE
);

CREATE TABLE sesion (
    id_sesion int auto_increment,
    nombre_sesion varchar(50),
    id_torneo int,
    FOREIGN KEY (id_torneo) REFERENCES torneo(id_torneo) ON DELETE CASCADE
);

CREATE TABLE sesion_equipo (
    id_sesion int,
    id_equipo int,
    FOREIGN KEY (id_sesion) REFERENCES sesion(id_sesion) ON DELETE CASCADE,
    FOREIGN KEY (id_equipo) REFERENCES equipo(id_equipo) ON DELETE CASCADE
);
ALTER TABLE sesion_equipo CONVERT TO CHARACTER SET utf8;

CREATE TABLE sesion_jugador (
    id_sesion int,
    id_jugador int,
    FOREIGN KEY (id_sesion) REFERENCES sesion(id_sesion) ON DELETE CASCADE,
    FOREIGN KEY (id_jugador) REFERENCES jugador(id_jugador) ON DELETE CASCADE
);
ALTER TABLE sesion_jugador CONVERT TO CHARACTER SET utf8;

insert into sesion (nombre_sesion,id_torneo) values ('Sesion 1','1');

insert into sesion_equipo(id_sesion, id_equipo) values ('1','1');

insert into sesion_jugador(id_sesion, id_jugador) values ('1','1');
                                                    