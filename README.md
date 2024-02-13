
## PEC4 - Asignatura Desarrollo Backend con PHP
#### Máster Desarrollo de Sitios y Aplicaciones Web (UOC)

Esta práctica consistía en el desarrollo del backend de un portal de noticias y una API de consulta básica.

## Caso de estudio

La estructura de contenidos que se propone estará formada por dos entidades, la entidad noticia y la entidad categoría.

La entidad noticia dispondrá de los siguientes campos:

Título (texto inferior a 255 caracteres)
Autor (campo de texto)
Fecha de publicación
Contenido (texto largo)
Imagen
Categoría (como entidad referenciada)
La entidad categoría será una taxonomía simple con la que se organizarán las noticias, a modo de las taxonomías en Drupal.

Para definir las relaciones entre las dos entidades, noticia y categoría, tendremos en cuenta que una noticia puede pertenecer a varias categorías.

Sin embargo, para simplificar asumiremos que un autor escribirá sólo una noticia. Por este motivo, “autor” se define como campo de texto, no como entidad.

Para implementar el portal de noticias seguiremos los siguientes pasos:

Instalación de Laravel
Creación de las migraciones, modelos y controladores necesarios
Creación de "fakers" y "seeders" (sistema para generar contenidos ficticios de Laravel)
Implementación del frontend de la aplicación
Desarrollo de la API de consulta de datos
Migración al servidor de pruebas
 

Tareas

En concreto se pide:

 
### a) Instalación de Laravel

En primer lugar instalar Laravel en el servidor local y comprobar su funcionamiento.  

### b) Crear las migraciones y modelos necesarios. Uso de Tinker

A partir de las especificaciones de la aplicación crearemos las migraciones, los modelos necesarios y la relación entre las dos entidades a través de una “pivot table”.

Con la herramienta Tinker, probaremos la instanciación de alguna noticia y su asignación a alguna categoría.
 
### c) Generar contenidos ficticios

Para generar contenidos ficticios utilizaremos Factory. Factory es un mecanismo que nos permite generar datos de prueba en la base de datos.

Utilizaremos Faker para generar contenidos ficticios. Para activarlo podemos crear un seeder y llamarlo con el comando: php artisan db:seed

Encontraréis más información en este enlace: https://laravel.com/docs/9.x/seeding

De esta forma crearemos al menos 100 noticias automáticamente.

### d) Implementar el frontend de la aplicación

La página de inicio mostrará un listado de 5 noticias. De cada una de ellas se mostrará su título (enlazado a la página única de la noticia), la imagen y la fecha de publicación.

Además será necesario crear la página única de cada una de las noticias, donde se mostrarán todos sus campos.

En la página de inicio añadiremos un menú con tres enlaces, a cada una de las APIs implementadas en el siguiente apartado. 

### e) API

A continuación desarrollaremos los siguientes puntos de entrada API (de solo lectura) y comprobaremos su funcionamiento en un navegador web:

- / api / noticias / <page>
El parámetro < page > permite seleccionar cada una de las páginas de resultado (has de configurar 10 noticias por página). Devuelve un listado en formato JSON con los títulos, ids y fechas de publicación de cada una de las noticias.

- / api / noticia / <id>
Donde < id > es el identificador único de cada noticia. Devuelve todos los campos de la noticia en formato JSON.

- / api / categoria / <id> / <page>
Donde < id > es el identificador único de la categoría. Devuelve un listado en formato JSON con los títulos, ids y fechas de publicación de cada una de las noticias de la categoría especificada, y < page > permite seleccionar la página de resultados deseada.

### Página principal (Noticias)

![image](https://github.com/RaquelBayas/PHP_PEC4/assets/31921518/5424009a-37c6-419d-b11d-7d963c4299e4)

### Página noticia

![image](https://github.com/RaquelBayas/PHP_PEC4/assets/31921518/147c2f1a-ee7f-4f44-8aca-c12400b33892)

### /api/noticias/page
<img width="550" alt="image" src="https://github.com/RaquelBayas/PHP_PEC4/assets/31921518/a69e098a-5b3a-4151-bd96-d45811756eb9">

### /api/noticia/id
<img width="887" alt="image" src="https://github.com/RaquelBayas/PHP_PEC4/assets/31921518/f2a854e2-2252-4921-8f75-62f537315c70">

### /api/categoria/id/page
<img width="590" alt="image" src="https://github.com/RaquelBayas/PHP_PEC4/assets/31921518/c6c036f4-37ef-466c-9d5d-8fa9db46b00f">





