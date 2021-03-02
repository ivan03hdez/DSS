Iniciar Laravel: composer create-project laravel/laravel=6.8.* miproyecto --prefer-dist

Para servir: php artisan serve

Hay que realizar las siguientes migraciones desde la linea de comandos una vez el servidor esté up:
  php artisan make:migration create_producto_table --create=producto
  php artisan make:migration create_promocion_table --create=promocion
  php artisan make:migration create_pedido_table --create=pedido
  php artisan make:migration create_lineaPedido_table --create=lineaPedido
  php artisan make:migration create_listaDeFavoritos_table --create=listaDeFavoritos
  php artisan make:migration create_cesta_table --create=cesta

Crear seeders:
  php artisan make:seeder ProductoTableSeeder
  php artisan make:seeder PromocionTableSeeder
  php artisan make:seeder ListaDeFavoritosTableSeeder
  php artisan make:seeder AdministradorTableSeeder

Crear clases de Eloquent ORM:
  php artisan make:model Producto
  php artisan make:model Promocion
  php artisan make:model Pedido
  php artisan make:model LineaPedido
  php artisan make:model Cliente
  php artisan make:model Administrador
  php artisan make:model ListaDeFavoritos
  php artisan make:model Cesta
  
  *Si hacemos "php artisan make:model Product -m se crean las migraciones"*
![image](https://user-images.githubusercontent.com/61051448/109631211-0367e600-7b46-11eb-8902-8795e535258e.png)
