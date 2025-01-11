API de Usuarios  

Descripción  
Esta es una API desarrollada con Laravel que gestiona una lista de usuarios. Proporciona funcionalidades para visualizar usuarios con paginación y muestra información como nombre, apellido y RUT.  

Requisitos Previos  
PHP >= 8.1  
Composer instalado  
XAMPP con MySQL y Apache  

Instrucciones de Instalación
1. Clonar el repositorio
2. Instalar dependencias de Composer  
composer install
3. Crear una copia del archivo .env  
copy .env.example .env    # Windows  
cp .env.example .env     # Linux/Mac  
4. Generar la clave de la aplicación  
php artisan key:generate  
5. Configurar Base de Datos  

Iniciar Apache y MySQL desde XAMPP

Opción 1 (Local)

Ir a http://localhost/phpmyadmin  
Crear una nueva base de datos llamada "geniafy"  
Configurar en el archivo .env (REVISAR INSTRUCCIONES EN .env COPIADO)

Opción 2 (Base de datos remota)  

Descomentar en el archivo .env la sección de base de datos remota que incluye las credenciales de db4free.net  

6. Crear y poblar la base de datos  
php artisan migrate --seed  
7. Iniciar el servidor   
php artisan serve  

Uso
Acceder a la lista de usuarios: http://localhost:8000/usuarios
