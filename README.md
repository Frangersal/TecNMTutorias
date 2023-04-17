## Proyecto TecNM Tutorias
# Proyecto de titulacion 

# Pasos para instalar este proyecto de forma local

-Instalar PHP 7.3 para arriba (8.0 para arriba tambien)
    -Para esto nos digigimos a la pagina https://www.php.net/downloads.php
        -Ahi tendremos diferentes versiones de php, en caso de tener windows descargamos el .zip 
        -lo descomprimimos, renombramos la carpeta a "php" y la arrastramos a "C:\Program Files"
        -Nos aseguramos que "C:\Program Files\php" este en nuestras Variables de entorno.
    -Tener las siguiente extenciones habilitadas: "openssl" y "fileinfo"
    -Para esto tenemos que dirigirnos a donde tengamos instalado PHP ej. "C:\Program Files\php"
    -Abrimos como administrador el archivo "php.ini"
        -Si no tenemos el archivo "php.ini" copiamos "php.ini-development" y renombramos como "php.ini"
    -Buscamos las siguientes lineas y las descomentamos, para esto basta con eliminar los ";" 
        -;extension=openssl
        -;extension=fileinfo
        -;extension=pdo_mysql
-Instalar Composer.
    -Para esto nos dirigimos a la pagina https://getcomposer.org/download/ 
    -Descargamos en el enlace que dice "Composer-Setup.exe" y lo instalamos con el Asistente de instalacion.
-Instalar XAMPP.
    -Para esto nos dirigimos a la pagina https://www.apachefriends.org/es/index.html 
    -Descargamos en el enlace que dice "XAMPP para Windows" y lo instalamos con el Asistente de instalacion.
-Clonamos (o descargamos .zip) este repositorio a la carpeta C:\xampp\htdocs
-Abrimos la carpeta del proyecto
-Abrimos en esa carpeta la terminal "CMD"
-Ejecutamos el comando "$ composer update"

En este punto ya deberia poder mostrarse el proyecto 
ingresando "http://localhost/TecNMTutorias/public/" en el navegador

-Crear Base de datos desde "phpMyAdmin"
    -Abrimos el panel de control de XAMPP
    -En el modulo de MySQL damos click al boton "Admin"
    -Ya "phpMyAdmin" damos click en "Nueva" se encuentra en el menu derecho de la pantalla
    -crearemos una base de datos con el nombre "phpMyAdmin"
    -utf8_general_ci

-Instalar Migrations
    -Abrimos en esa carpeta la terminal "CMD"
    -Ejecutamos el comando "$ php artisan migrate"
-Instalar Seeders
    -Abrimos en esa carpeta la terminal "CMD"
    -Ejecutamos el comando "$ php artisan db:seed"
