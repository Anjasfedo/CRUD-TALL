<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\items;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Hapus data existing
        Items::truncate();

        // Seed data dummy
        $categories = range(1, 10);

        foreach ($categories as $categoryId) {
            Items::create([
                'name' => "Item Category $categoryId",
                'category_id' => $categoryId,
                'price' => rand(10, 100),
                'description' => "Description for Item Category $categoryId",
            ]);
        }
    }
}
