# PHPFinal
PHPFinal
Lanzar Web:
php artisan serv
Lanzar Web actualizándose:
npm run dev
Componentes de laravel:
Se pueden llamar a los distintos componentes de la clase views.components añadiendo a la etiqueta x-{{$_NOMBRECLASE}},
esto facilita el aplicar estilos a los distintos componentes de la web + nos evitamos el submit, la componente slot de estos
sirve para poder acceder al contenido de ese componente.

Anotaciones:
@csrf -> Añade un token para evitar ataques xss

{@auth|@endauth}/{@gues|@endguest}
-> cuando el usuario este authorizado se mostrará la parte que hace referencia la anotación.

->cuando el usuario este como invitado se mostrará la parte que hace referencia la anotación.
se finalizan los dos añadiendole "end".


vite
Es una herramienta la cual nos va a ayudar a la hora de construir la web en la parte del front.

php artisan make:controller AlumnosController
Nos crea un controller de nombre "AlumnosController"
migracion:
Crear una base de datos desde la aplicacion a la base de datos
php artisan make:migration {{$_NOMBRE}}
--create=alumno:
Esto crea la estructura de crear alumno -> nos crea el constructor de la tabla
php artisan migrate-> sirve para ejecutarlo.
php artisan make:factory AlumnoFactory
Es una clase que me va a permitir crear un valor para cada uno de los registros de la base de datos-> tabla alumno-> nos creara los setters de esa columna.
php artisan make:seeder AlumnoSeeder:
En el seeder lo que hacemos es invocar al factory para obtener el registro del factory y lo añade a la base de datos.
php artisan make model:Alumno
Nos crea el ORM. En el directorio Models
php artisan DB:seed
nos permite rellenar la base de datos con los datos ya indicados en AlumnoFactory
php artisan migrate:fresh --seed
Dropea la database y lanza el seed
public
aqui va a estar todo lo que el cliente puede ver.
database
todo lo relacionado con la base de datos del proyecto.
resourcers.views
Aqui va a estar todo lo que tiene la web, todas sus páginas.
