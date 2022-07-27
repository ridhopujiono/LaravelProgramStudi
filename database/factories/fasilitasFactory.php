<?php

namespace Database\Factories;

use App\Models\fasilitas;
use Illuminate\Database\Eloquent\Factories\Factory;

class fasilitasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = fasilitas::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_fasilitas' => $this->faker->word,
        'foto' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
