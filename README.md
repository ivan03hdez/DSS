Iniciar Laravel: composer create-project laravel/laravel=6.8.* miproyecto --prefer-dist

git init
git remote add origin https...
git pull origin ramaATraer

Para servir: php artisan serve

Migración:
  php artisan make:migration create_favorite_lists_users_table --create=favorite_lists_users
 
Runear Migraciones:
  php artisan migrate:fresh
  
Runear **Migraciones y seeder**s:
  php artisan migrate:fresh --seed
 
Runear **pruebas unitarias**:
  ./vendor/bin/phpunit
  
**php artisan migrate:fresh --seed** --> lo que hace es ejecutar los metodos down de todas las migraciones (eliminar las tablas) y despues los métodos up (creación tablas). Despúes ejecuta el fichero DatabaseSeeder
  
Para migraciones de la tabla auxiliar de Many2Many:
  php artisan make:migration create
  
Crear Tests:
  php artisan make:test OrderLineDatabaseTest           --> esto lo manda al directorio Feature
  php artisan make:test OrderLineDatabaseTest --unit    --> esto lo manda al directorio Unit

**Assert para las DatabaseTest**:
    $this->assertDatabaseHas($table, array $data);	Assert that a table in the database contains the given data.
    $this->assertDatabaseMissing($table, array $data);	Assert that a table in the database does not contain the given data.
    $this->assertDeleted($table, array $data);	Assert that the given record has been deleted.
    $this->assertSoftDeleted($table, array $data);	Assert that the given record has been soft deleted.

Creación de clases model y migraciones:
  php artisan make:model Product -m
  php artisan make:model Order -m
  php artisan make:model User -m
  php artisan make:model Promotion -m
  php artisan make:model OrderLine -m
  php artisan make:model FavoriteList -m
  php artisan make:model ShoppingCart -m

Insertar las migraciones en la BBDD:
  php artisan migrate:install

Crear seeders:
  php artisan make:seeder ProductTableSeeder
  php artisan make:seeder PromotionTableSeeder
  php artisan make:seeder FavoriteListTableSeeder
  php artisan make:seeder UserTableSeeder
  php artisan make:seeder OrderTableSeeder
  php artisan make:seeder OrderLineTableSeeder
  php artisan make:seeder ShoppingCartTableSeeder
  
  php artisan make:seeder ProductShoppingCartTableSeeder
  php artisan make:seeder Product_ShoppingCartTableSeeder
  php artisan make:seeder FavoriteListProductTableSeeder
  php artisan make:seeder FavoriteList_ProductTableSeeder
  
  
Insertar las semillas en la BBDD:
  php artisan db:seed
  
**IMPORTATE** --> composer dump-autoload --> para actualizar posibles seeders nuevos y evitar el erroe de "Target class class_name does not exists"
  
SQL:
-------------------------------------------------------------------------------------------
  Product(id, name, price, promotionPrice, description, stock, color, orderId,promotionId)
    CP(id)
    CAj(promotionId) --> Promotion
-------------------------------------------------------------------------------------------
  OrderLine(orderLine, price, quantity, description, productId, orderId)
    CP(id, orderLine, orderId)
    CAj(productId) --> Product
    CAj(orderId) --> order
    VNN(productId)
    VNN(orderId)
-------------------------------------------------------------------------------------------
  Order(id, totalPrice, userId)
    CP(id)
    CAj(userId)
    VNN(userId)
-------------------------------------------------------------------------------------------
  User(id, name address, phone, email, password, role)
    CP(id)
-------------------------------------------------------------------------------------------
  ShoppingCart(id, total, userId)
    CP(id)
    CAj(userId)
-------------------------------------------------------------------------------------------
  Promotion(id, discount)
    CP(id)
-------------------------------------------------------------------------------------------
  FavoriteList(id, name, description, userId)
    CP(id)
    CAj(userId)
    VNN(userId)
-------------------------------------------------------------------------------------------
  Product_ShoppingCart(produtId, cartId)
    CP(produtId, cartId)
    CAj(produtId)
    CAj(cartId)
-------------------------------------------------------------------------------------------
  Product_FavoriteList(produtId, favId)
    CP(produtId, favId)
    CAj(produtId)
    CAj(favId)
-------------------------------------------------------------------------------------------

Profesor, clase:
  composer install
  .env
  .env.example
  cp .env.example .env
  php artisan key:generate


  
**DIAGRAMA DE CLASES**
![diagrama clases](https://user-images.githubusercontent.com/58994866/110305304-ea0ae200-7ffc-11eb-9178-492cdbe5e369.PNG)





