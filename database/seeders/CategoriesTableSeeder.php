<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = array();
        for ($i = 0; $i < 5; $i++) {
            $categories[] = [
                'name' => 'Category ' . $i,
                'slug' => 'category-' . $i,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        DB::table('categories')->insert($categories);
    }
}
