<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product;
        $product->title = 'สินค้าชิ้นแรก';
        $product->detail = 'สินค้าชิ้นแรก';
        $product->view_count = 0;
        $product->order_count = 0;
        $product->price = 0;
        $product->save();

        factory(Product::class, 20)->create();
    }
}
