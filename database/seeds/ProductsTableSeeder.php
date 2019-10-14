<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\ProductCategory;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new ProductCategory();
        $category->name = 'General';
        $category->save();
        //array_push($category_ids, $category->id);

        $category = new ProductCategory();
        $category->name = 'Sport';
        $category->save();

        $category = new ProductCategory();
        $category->name = 'Entertainment';
        $category->save();
        //array_push($category_ids, $category->id);

        $product = new Product;
        $product->title = 'สินค้าชิ้นแรก';
        $product->detail = 'สินค้าชิ้นแรก';
        $product->view_count = 0;
        $product->order_count = 0;
        $product->category_id = 1;
        $product->price = 0;
        $product->save();

        factory(Product::class, 20)->create([
            'category_id' => mt_rand(1, 3)
        ]);
        /*factory(Product::class, 5)->states('popular')->create([
            'category_id' => mt_rand(1, 3)
        ]);*/
    }
}