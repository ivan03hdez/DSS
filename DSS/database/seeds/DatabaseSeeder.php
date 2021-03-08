<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call( UserTableSeeder ::class );
        $this->command->info('User table seeded!' );

        $this->call( PromotionTableSeeder ::class );
        $this->command->info('Promotion table seeded!' );

        $this->call( ProductTableSeeder ::class );
        $this->command->info('Product table seeded!' );
/*
        $this->call( FavoriteListTableSeeder ::class );
        $this->command->info('FavoriteList table seeded!' );

        $this->call( OrderTableSeeder ::class );
        $this->command->info('Order table seeded!' );

        $this->call( OrderLineTableSeeder ::class );
        $this->command->info('OrderLine table seeded!' );

        $this->call( ShoppingCartTableSeeder ::class );
        $this->command->info('ShoppingCart table seeded!' );
*/
    }
}
