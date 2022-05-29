<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name,
            'content' => $this->faker->text(500),
            'main_image' => 'storage/images/FWJolFp4uAsPea2IswGI3AFMIoTzMmmIWPbCkznA.jpg',
            'preview_image' => 'storage/images/uisHFgDOfLFJy28co07ytazxOQyb8r75IwhIr8dS.jpg',
            'category_id' => Category::get()->random()->id
        ];
    }
}
