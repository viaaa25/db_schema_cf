<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\jaminan_perhiasan;

class JaminanPerhiasanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = JaminanPerhiasan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kd_emas' => $this->faker->word,
            'berat' => $this->faker->word,
            'unit' => $this->faker->word,
            'nominal' => $this->faker->word,
            'atas_nama' => $this->faker->word,
        ];
    }
}
