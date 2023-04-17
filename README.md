## Proyecto TecNM Tutorias

# Proyecto de titulación 



# Pasos para instalar este proyecto de forma local



1. Instalar PHP 7.3 para arriba (8.0 para arriba también sirve)

    - Para esto nos dirigimos a la página https://www.php.net/downloads.php

    - Ahí tendremos diferentes versiones de php, en caso de tener windows descargamos el .zip 

    - Lo descomprimimos, renombramos la carpeta a "php" y la arrastramos a "C:\Program Files"

    - Nos aseguramos que "C:\Program Files\php" este en nuestras Variables de entorno.

    - Tener las siguientes extensiones habilitadas: "openssl" , "fileinfo" y "pdo_mysql"

    - Para esto tenemos que dirigirnos a donde tengamos instalado PHP ej. "C:\Program Files\php"

    - Abrimos como administrador el archivo "php.ini"

        - Si no tenemos el archivo "php.ini" copiamos "php.ini-development" y renombramos como "php.ini"

    - Buscamos las siguientes líneas y las des-comentamos, para esto basta con eliminar los ";" 

        - ;extension=openssl

        - ;extension=fileinfo

        - ;extension=pdo_mysql



2. Instalar Composer.

    - Para esto nos dirigimos a la página https://getcomposer.org/download/ 

    - Descargamos en el enlace que dice "Composer-Setup.exe" y lo instalamos con el Asistente de instalación.



3. Instalar XAMPP.

    - Para esto nos dirigimos a la página https://www.apachefriends.org/es/index.html 

    - Descargamos en el enlace que dice "XAMPP para Windows" y lo instalamos con el Asistente de instalación.



4. Clonamos (o descargamos .zip) este repositorio a la carpeta "C:\xampp\htdocs"



5. Abrimos la carpeta del proyecto



6. Abrimos en esa carpeta la terminal "CMD"



7. Ejecutamos el comando "$ `composer update`"



En este punto ya debería poder mostrarse el proyecto 

ingresando "http://localhost/TecNMTutorias/public/" en el navegador



8. Crear Base de datos desde "phpMyAdmin"

    - Abrimos el panel de control de XAMPP

    - En el módulo de MySQL damos click al botón "Admin"

    - Ya "phpMyAdmin" damos click en "Nueva" se encuentra en el menú derecho de la pantalla

    - Crearemos una base de datos con el nombre "tecnm_tutorias" y "utf8_general_ci"



9. Instalar Migrations

    - Abrimos en esa carpeta la terminal "CMD"

    - Ejecutamos el comando "$ `php artisan migrate`"



10. Instalar Seeders

    - Abrimos en esa carpeta la terminal "CMD"

    - Ejecutamos el comando "$ `php artisan db:seed`"