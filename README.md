Iniciar Laravel: composer create-project laravel/laravel=6.8.* miproyecto --prefer-dist

Para servir: php artisan serve

Creación de clases model y migraciones:
  php artisan make:model Product -m
  php artisan make:model Order -m
  php artisan make:model User -m
  php artisan make:model Promotion -m
  php artisan make:model OrderLine -m
  php artisan make:model FavoriteList -m
  php artisan make:model ShoppingCart -m

Crear seeders:
  php artisan make:seeder ProductoTableSeeder
  php artisan make:seeder PromocionTableSeeder
  php artisan make:seeder ListaDeFavoritosTableSeeder
  php artisan make:seeder AdministradorTableSeeder
  
  *Si hacemos "php artisan make:model Product -m se crean las migraciones"*
  
**DIAGRAMA DE CLASES**
<img width="946" alt="Captura de pantalla 2021-03-02 a las 17 10 37" src="https://user-images.githubusercontent.com/60882313/109678332-ce29bb00-7b7a-11eb-825f-11a83b1a562f.png">



