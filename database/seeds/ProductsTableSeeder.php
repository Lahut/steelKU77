<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\ProductCategory;
use App\User;
use Illuminate\Support\Facades\Hash;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Administrator";
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make('adminadmin');
        $user->email_verified_at = now();
        $user->role = "ADMIN";
        $user->save();

        $user2 = new User();
        $user2->name = "VIEWERtester";
        $user2->email = 'view@gmail.com';
        $user2->password = Hash::make('viewview');
        $user2->email_verified_at = now();
        $user2->role = "VIEWER";
        $user2->save();

        $user3 = new User();
        $user3->name = "VIEWER2tester";
        $user3->email = 'view2@gmail.com';
        $user3->password = Hash::make('viewview2');
        $user3->email_verified_at = now();
        $user3->role = "VIEWER";
        $user3->save();

        $category = new ProductCategory();
        $category->name = 'เหล็กเส้น';
        $category->save();
        //array_push($category_ids, $category->id);

        $category = new ProductCategory();
        $category->name = 'ลวด';
        $category->save();

        $category = new ProductCategory();
        $category->name = 'เหล็กดัด';
        $category->save();
        //array_push($category_ids, $category->id);

        $product = new Product;
        $product->title = 'สินค้าชิ้นแรก';
        $product->detail = 'สินค้าชิ้นแรก';
        $product->view_count = 0;
        $product->order_count = 0;
        $product->category_id = 1;
        $product->user_id = $user->id;
        $product->price = 0;
        $product->save();

        factory(Product::class, 20)->create([
            'user_id' => $user->id
        ]);
        /*factory(Product::class, 5)->states('popular')->create([
            'category_id' => mt_rand(1, 3)
        ]);*/
    }
}
