<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $files = Storage::allFiles(public_path('images'));
        $randomFile = $files[rand(0, count($files) - 1)];

        DB::table('products')->insert([
            'name' => Str::random(10),
            'price' => rand(0, 1000),
            'image' => $randomFile,
            'category_id' => Category::all()->random()->id,
        ]);
    }
}
