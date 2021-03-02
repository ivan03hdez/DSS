Iniciar Laravel: composer create-project laravel/laravel=6.8.* miproyecto --prefer-dist

git init
git remote add origin https...
git pull origin ramaATraer

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
  php artisan migrate:install

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
  
SQL:
-------------------------------------------------------------------------------------------
  Product(id, name, price, promotionPrice, description, stock, color, orderId)
    CP(id)
-------------------------------------------------------------------------------------------
  OrderLine(id, orderLine, price, quantity, description, productId, orderId)
    CP(id, orderLine, orderId)
    id --> bigIncrements
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
  Promotion(id, discount, productId)
    CP(id)
    CAj(productId)
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

  
**DIAGRAMA DE CLASES**
<img width="946" alt="Captura de pantalla 2021-03-02 a las 17 10 37" src="https://user-images.githubusercontent.com/60882313/109678332-ce29bb00-7b7a-11eb-825f-11a83b1a562f.png">



