## Para clonar el repositorio ejecutar

~~~
git clone https://github.com/RubenHernandez1/WH_PH.git
~~~


## Ejecutar para instalar las dependencias 
~~~
composer install
~~~

## Ejecutar el siguiente comando para genear el archivo .env
~~~
cp .env.example to .env
~~~

## Generar una clave de proyecto
~~~
php artisan key:generate
~~~


## Dependiendo si el proyecto es levantado con laragon o con apache por ejemplo se debe de ejecutar el siguiente comando en la raiz del proyecto
~~~
php artisan run
~~~