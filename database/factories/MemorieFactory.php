<?php

namespace Database\Factories;

use App\Models\Memorie;
use Illuminate\Database\Eloquent\Factories\Factory;

class MemorieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Memorie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $tags = ['PHP','JavaScript','VueJS'];
        return [
            'label'     => $this->faker->sentence(5),
            'content'   => $this->faker->sentence(40),
            'tags'      => $this->faker->randomElement($tags),
            'private'   => $this->faker->boolean(),
        ];
    }
}
