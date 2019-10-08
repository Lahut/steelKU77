<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Category;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->name = 'General';
        $category->save();
        //array_push($category_ids, $category->id);

        $category = new Category();
        $category->name = 'Sport';
        $category->save();

        $category = new Category();
        $category->name = 'Entertainment';
        $category->save();
        //array_push($category_ids, $category->id);

        $post = new Post;
        $post->title = 'สวัสดีชาวโลก';
        $post->detail = 'นี่คือโพสต์แรกของคุณ';
        $post->view_count = 0;
        $post->category_id = 1;
        $post->save();
        //array_push($category_ids, $category->id);

        factory(Post::class, 20)->create([
            'category_id' => mt_rand(1, 3)
        ]);
        factory(Post::class, 10)->states('popular')->create([
            'category_id' => mt_rand(1, 3)
        ]);
    }
}
