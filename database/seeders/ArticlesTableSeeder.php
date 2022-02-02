<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articles = array();
        for ($i = 0; $i < 10; $i++) {
            $articles[] = [
                'title' => 'Article ' . $i,
                'description' => 'Description ' . $i,
                'category_id' => rand(1, 5),
                'body' => 'Body ' . $i,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        DB::table('articles')->insert($articles);
    }
}
