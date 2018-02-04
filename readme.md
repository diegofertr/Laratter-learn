# Laratter
 Una aplicacion clon de Twitter construida con la teconología de laravel,
 con propósitos de práctica en desarrollo con php.

## Instalación y uso
  Para probar la aplicacion de modo local seguir lo siguiente:

  - 1 Clonar el repositorio de github
      `git@github.com:diegofertr/Laratter-learn.git`

  - 2 Entrar a la carpeta del proyecto
      `cd Laratter-learn`

  - 3 Instalar las dependencias necesarias para laravel
      `composer install `

  - 4 Una vez instaladas las dependencias copiar el archivo .env.example y **asignar configuraciones locales**
      `cp .env.example .env`

  - 5 Generar la key para la aplicacion
      `php artisan key:generate`

  - 6 Instalar los paquetes o librerias
      `yarn`
      o
      `npm install`

  - 7 Una vez seguidos todos los pasos procedemos a iniciar la aplicación
      `php artisan serve`

  - 8 Paso opcional compilar los assets de css y js
      `npm run dev`

  - 9 Ir a la direccion local `localhost:8000` para ver el proyecto
