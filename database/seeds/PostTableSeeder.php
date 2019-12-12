<?php

use Illuminate\Database\Seeder;
use App\Post;


class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $post1 = new Post;

       $post1->title = "Laravel tutorial 1";

       $post1->content = "In this tutorial I will show you how to code in Laravel";

       $post1->user_id = 1;

       $post1->save();

       $post2 = new Post;

       $post2->title = "XML tutorial 3";

       $post2->content = "In this tutorial I will show you how to use XML";

       $post2->user_id = 1;

       $post2->save();

       $post3 = new Post;

       $post3->title = "PHP conventions";

       $post3->content = "In this tutorial I will teach you PHP conventions";

       $post3->user_id = 1;

       $post3->save();

       $post4 = new Post;

       $post4->title = "HTML/CSS advanced";

       $post4->content = "In this tutorial I will show you how to code in html and css the advanced way";

       $post4->user_id = 1;

       $post4->save();

       $post5 = new Post;

       $post5->title = "Laravel tutorial 3";

       $post5->content = "Continuation of the Laravel tutorial series!";

       $post5->user_id = 1;

       $post5->save();
    }
}
