<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $files = Storage::allFiles(public_path('images'));
        $randomFile = $files[rand(0, count($files) - 1)];
        return [
            'name' => $this->faker->word(),
            'price' => $this->faker->randomDigitNotNull(),
            'image' => $randomFile,
            'category_id' => Category::all()->random()->id,
        ];
    }
}
