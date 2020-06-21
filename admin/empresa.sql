create database empresa;
use empresa;
create table Empleado (codigo int, nombre varchar(20), apellido varchar(20), edad int, sueldo double);
insert into Empleado (codigo, nombre, apellido, edad, sueldo) 
value
(1, 'Abigail', 'Diaz', 29, 1200),
(2, 'Silvia', 'Murillo', 37, 1000),
(3, 'Jennifer', 'Hernández', 20, 1200),
(4, 'Alejandro', 'Murillo', 40, 800),
(5, 'Gabriel', 'López', 29, 500),
(6, 'Carlos', 'Martínez', 32, 900),
(7, 'Nelson', 'Pérez', 30, 650),
(8, 'David', 'Rosales', 25, 500),
(9, 'Consuelo', 'Flores', 31, 800),
(10, 'Jorge', 'Núñez', 45, 1200);

select * from Empleado;

