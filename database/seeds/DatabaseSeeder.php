<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Product;
use App\Category;
use App\Transaction;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        User::truncate();
        Category::truncate();
        Product::truncate();
        Transaction::truncate();
        DB::table('category_product')->truncate();
        factory(User::class,200)->create();
        factory(Category::class,50)->create();
        factory(Product::class,200)->create()->each(function ($producto){
            // obtiene las categorias y selecciona el id de 5,
            $categories=Category::all()->random(mt_rand(1,5))->pluck('id');
            // categories del modelo
            $producto->categories()->attach($categories);
        });
        factory(Transaction::class,100)->create();
    }
}
