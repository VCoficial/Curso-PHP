# PROYECTO AGENDA

La base de datos se llama : agenda 
y la tabla : contactos

CONTACTO
id autoincrementable integer
nombre varchar(200)
apellidos varchar(200)
email varchar(200)
telefono varchar(100)
movil varchar(100)
activo boleeano // para listar los contactos

Consulta SQL
create table contacto (
id integer primary key AUTO_INCREMENT,
nombre varchar(200),
apellidos varchar(100),
email varchar(200),
telefono varchar(100),
movil varchar(100),
activo boolean)

Ojo : el boolean se transforma en tinyin(1) integer de una sola posicion, donde 1 es true y 0 es false.

insert into contacto (nombre,apellidos,email,telefono,movil,activo)
values ("juan", "perez", "juanpe@gmail.com", "54515121", "544646", 1) 

## CONEXIÓN A LA BASE DE DATOS
PHP tiene varias clases predeterminadas para manejar conexiones con BASES DE DATOS :

Clase 1 : Mysql() //base de datos mysql
Clase 2 : PDO() //universal PHP DATA OBJECTS

## require, include, require_once, include_once
Todo incluye un archivo externo, la diferencia esta en el manejo de error.
Si hay un error grave INCLUDE rompe o aborta la carga normal del programa el require genera el error pero permite la carga del aplicativo.

## PATRON DE DISEÑO FRONT_CONTROLLER

En el diseño del aplicativo tengo una sola "puerta de entrada" a las funcionalidades.

*Nota : Pluggin MySQL v5.2.3 cweijan*

## VERSION 2 UTILIZANDO ARREGLO DE OBJETOS EN PHP

en este casoo agregamos el parametro PDO::FETCH_OBJ para que la consulta nos devuelva un objeto con sus atributos.

# HOSPISOF V1

El favicon se puede descargar cualquier icono en formato .ico
https://realfavicongenerator.net/

# AVANCE MAYO 14 2022
1.Organizar el menu del panel con usuario activo
2.Implementar el sistema de mensajes de la aplicacion (Variables de SESION)
3.Registro y encriptacion del paciente (Algoritmos de Hashing)-Validacion de datos del lado del servidor
4.Login del paciente
5.Historias de usuario (Territorium)---- scrum

# Validación PHP
trim() // limpie espacios en blanco all inicio y al final
filter_() con los filtros
https://www.php.net/manual/en/filter.filters.sanitize.php

# Algoritmos de encriptación .....bcrypt