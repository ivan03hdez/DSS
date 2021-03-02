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

Insertar las migraciones en la BBDD:


Crear seeders:
  php artisan make:seeder ProductTableSeeder
  php artisan make:seeder PromotionTableSeeder
  php artisan make:seeder FavoriteListTableSeeder
  php artisan make:seeder UserTableSeeder
  php artisan make:seeder OrderTableSeeder
  php artisan make:seeder OrderLineTableSeeder
  php artisan make:seeder ShoppingCartTableSeeder
 
Insertar las semillas en la BBDD:
  php artisan db:seed
  
  
  
**DIAGRAMA DE CLASES**
<img width="946" alt="Captura de pantalla 2021-03-02 a las 17 10 37" src="https://user-images.githubusercontent.com/60882313/109678332-ce29bb00-7b7a-11eb-825f-11a83b1a562f.png">



