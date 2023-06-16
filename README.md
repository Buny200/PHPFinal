# PHPFinal

## Descripción
Este es el repositorio de PHPFinal, una aplicación web construida con Laravel.

## Instrucciones de lanzamiento

### Lanzar la aplicación web
Ejecuta el siguiente comando para iniciar el servidor de desarrollo:
php artisan serve

### Actualizar la aplicación web en tiempo real
Si deseas que los cambios se reflejen automáticamente mientras trabajas en el código, utiliza el siguiente comando:
npm run dev


## Componentes de Laravel
En Laravel, los componentes se encuentran en la carpeta `views/components`. Puedes llamar a estos componentes utilizando la etiqueta `x-{{_NOMBRECLASE}}`. Esto facilita la aplicación de estilos a los distintos componentes de la web y evita la necesidad de utilizar el envío de formularios. Además, el componente `slot` se utiliza para acceder al contenido de un componente.

## Anotaciones
- `@csrf`: Añade un token para evitar ataques XSS.

- `@auth` / `@endauth`: Se muestra el contenido entre estas etiquetas solo cuando el usuario está autenticado.

- `@guest` / `@endguest`: Se muestra el contenido entre estas etiquetas solo cuando el usuario es un invitado.

## Vite
Vite es una herramienta que nos ayuda a construir la parte del front-end de la aplicación web.

## Comandos de Artisan

- Crear un controlador llamado "AlumnosController":
php artisan make:controller AlumnosController


- Crear una migración para la base de datos:
php artisan make:migration {{$_NOMBRE}} --create=alumno

Este comando crea la estructura para crear una tabla "alumno" en la base de datos.

- Ejecutar las migraciones:
php artisan migrate


- Crear una factory llamada "AlumnoFactory":
php artisan make:factory AlumnoFactory

La factory nos permite generar valores para cada uno de los registros de la tabla "alumno" en la base de datos.

- Crear un seeder llamado "AlumnoSeeder":
php artisan make:seeder AlumnoSeeder

En el seeder, invocamos a la factory para obtener registros de prueba y los agregamos a la base de datos.

- Crear un modelo llamado "Alumno":
php artisan make:model Alumno

El modelo se crea en el directorio "Models" y representa una tabla en la base de datos.

- Ejecutar los seeders:
php artisan db:seed

Este comando rellena la base de datos con los datos especificados en AlumnoFactory.

- Reiniciar la base de datos y ejecutar los seeders:
php artisan migrate:fresh --seed

Este comando elimina todas las tablas de la base de datos y vuelve a crearlas antes de ejecutar los seeders.

## Estructura de directorios

- `public`: Aquí se encuentra todo lo que el cliente puede ver.

- `database`: Contiene los archivos relacionados con la base de datos del proyecto.

- `resources/views`: Aquí se encuentran todas las páginas web de la aplicación.

