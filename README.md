Iniciar Laravel: composer create-project laravel/laravel=6.8.* miproyecto --prefer-dist

Para servir: php artisan serve

Hay que realizar las siguientes migraciones desde la linea de comandos una vez el servidor esté up:
  php artisan make:migration create_producto_table --create=producto
  php artisan make:migration create_promocion_table --create=promocion
  php artisan make:migration create_pedido_table --create=pedido
  php artisan make:migration create_lineaPedido_table --create=lineaPedido
  php artisan make:migration create_cliente_table --create=cliente
  php artisan make:migration create_administrador_table --create=administrador
  php artisan make:migration create_listaDeFavoritos_table --create=listaDeFavoritos
  php artisan make:migration create_cesta_table --create=cesta

Crear seeders:
  php artisan make:seeder ProductoTableSeeder
  php artisan make:seeder PromocionTableSeeder
  php artisan make:seeder ListaDeFavoritosTableSeeder
  php artisan make:seeder AdministradorTableSeeder
