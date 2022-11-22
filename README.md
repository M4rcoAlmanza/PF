<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## PROYECTO FINAL
Marco Almanza - INNI

Mi proyecto final gira en torno a una intranet para psicólogos que tienen pacientes (que pueden ser compartidos), y que agendan citas (Terapias) de sus pacientes. El index de la página es pf.test/terapia.

##CUENTAS Y CONTRASEÑAS:
 - Samuel Profesor -> samuel@gmail.com
 - Marco Almanza -> marco@gmail.com
 (Ambos tienen de contraseña 12345678, y ambos tienen información cargada).

## Almacenamiento de la información y Relaciones

Utilizo tres tablas principales, terapias, pacientes, y la de users, que representa a los psicólogos. Utilizo los seeders y factories para crear pacientes falsos, al ejecutar el seeder añade 30. Relaciona la tabla terapias con pacientes (muchos a muchos) y terapueta con terapia (1 a muchos). Utiliza dos tablas para hacer las relaciones muchos a muchos, ya que hay una tabla extra de archivos.

## Autenticación y autorización

Se necesita iniciar sesión para acceder a todas las páginas, ya que es una intranet que maneja información personal de los usuarios. Cada una de las páginas tiene la opción para cerrar sesión. Utilizo gates y policies, ambas, dependiendo el caso (en terapias uso ambas, y en usuarios solo policies).

## Validación

Está validado de ambos lados, cada uno de los formuarios

## UI/UX 

Tenemos navbar y footer común, un diseño de materialize css, nos muestra los errores válidados.

## ORM: Object-Relational mapping

Se utilizan las clases y los modelos en la mayoria de las tablas.

## Operación CRUD

Hay un CRUD completo (terapia) y uno casi completo para usuarios (solo no tiene modificar)

## Consulta, creación y eliminación de información

Se resuelve el problema de N + 1 consultas, implementa borrado lógico en las sesiones (no en los usuarios).

## Archivos (100)

Se cargan imágenes al crear nuevos pacientes. Solo el primer paciente tiene la foto cargada (se puede ver en el show del usuario uno, se llama Maximiliano).

## Correo electrónico (100)

Se implementa la verificación del correo.


