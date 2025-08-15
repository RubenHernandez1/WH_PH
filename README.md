## Para clonar el repositorio ejecutar

~~~
git clone https://github.com/RubenHernandez1/WH_PH.git
~~~


## Entrar al proyecto y ejecutar para instalar las dependencias 
~~~
composer install
~~~

## Ejecutar el siguiente comando para genear el archivo .env
~~~
cp .env.example .env
~~~

## Generar una clave de proyecto
~~~
php artisan key:generate
~~~

## Crear archivo se base de datos, en este caso no se usa la base, pero laravel lo pide
~~~
cd database
type nul > database/database.sqlite
~~~

## Ejecutar migraciones
~~~
php artisan migrate
~~~

## Dependiendo si el proyecto es levantado con laragon o con apache por ejemplo se debe de ejecutar el siguiente comando en la raiz del proyecto
~~~
php artisan serve
~~~


## Listo el proyecto ya funciona, las rutas son:

### '/' para guardar datos
### '/mensajes' para visualizar los mensajes guardados
### '/guardar' aqui se manda la información introducida en '/'
