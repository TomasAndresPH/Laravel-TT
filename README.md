API de Usuarios
Descripción
Este proyecto es una API desarrollada con Laravel que gestiona una lista de usuarios. Proporciona funcionalidades para visualizar usuarios con paginación y muestra información como nombre, apellido y RUT.
Requisitos Previos

PHP >= 8.1
Composer instalado
XAMPP con MySQL y Apache

Instrucciones de Instalación

Clonar el repositorio

Copygit clone [URL_DEL_REPOSITORIO]

Instalar dependencias de Composer

Copycomposer install

Crear una copia del archivo .env

Copycopy .env.example .env    # Windows
cp .env.example .env     # Linux/Mac

Generar la clave de la aplicación

Copyphp artisan key:generate

Configurar Base de Datos:

Iniciar Apache y MySQL desde XAMPP
Opción 1 (Local):

Ir a http://localhost/phpmyadmin
Crear una nueva base de datos llamada "geniafy"
Configurar en el archivo .env:
CopyDB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=geniafy
DB_USERNAME=root
DB_PASSWORD=



Opción 2 (Base de datos remota):

Descomentar en el archivo .env la sección de base de datos remota que incluye las credenciales de db4free.net




Crear y poblar la base de datos

Copyphp artisan migrate --seed

Iniciar el servidor

Copyphp artisan serve
La aplicación estará disponible en http://localhost:8000
Uso

Acceder a la lista de usuarios: http://localhost:8000/usuarios

Características

Lista paginada de usuarios
Visualización de nombre, apellido y RUT
Navegación entre páginas
Diseño responsivo con Bootstrap

Tecnologías Utilizadas

Laravel 10
MySQL
Bootstrap 5
JavaScript
