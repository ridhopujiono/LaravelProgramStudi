<?php

namespace Database\Factories;

use App\Models\pengajar;
use Illuminate\Database\Eloquent\Factories\Factory;

class pengajarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = pengajar::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_pengajar' => $this->faker->word,
        'foto' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
