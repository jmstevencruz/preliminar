-- se crea la BD
CREATE DATABASE preliminar;



-- se ejecuta dentro de la BD

CREATE TABLE profesores (
    nombre varchar(30),
    apellido  varchar(30),
    codigo bigint(20),
    cedula bigint(20) , 
   	profesion varchar(30),
   	interes varchar(200),
   	PRIMARY KEY	(cedula)
);