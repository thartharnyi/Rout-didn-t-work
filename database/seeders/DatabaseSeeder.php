<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $frontend=Category::factory()->create(['name'=>'frontend','slug'=>'frontend']);
        $backend=Category::factory()->create(['name'=>'backend','slug'=>'backend']);
        
        Blog::factory(10)->has(Comment::factory(3))->create(['category_id'=>$frontend->id]);
        Blog::factory(10)->has(Comment::factory(3))->create(['category_id'=>$backend->id]);

        
    }
}