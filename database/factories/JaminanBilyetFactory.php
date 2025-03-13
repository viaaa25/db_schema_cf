<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\jaminan_bilyet;

class JaminanBilyetFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = JaminanBilyet::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'status_jaminan' => $this->faker->word,
            'no_bilyet' => $this->faker->word,
            'tanggal_valuta' => $this->faker->dateTime(),
            'jangka_waktu' => $this->faker->word,
            'nominal' => $this->faker->word,
            'atas_nama' => $this->faker->word,
        ];
    }
}
