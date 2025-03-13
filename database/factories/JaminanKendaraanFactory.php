<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\jaminan_kendaraan;

class JaminanKendaraanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = JaminanKendaraan::class;

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
            'merk' => $this->faker->word,
            'type_kendaraan' => $this->faker->word,
            'tahun' => $this->faker->word,
            'warna' => $this->faker->word,
            'atas_nama' => $this->faker->word,
            'no_polisi' => $this->faker->word,
            'no_rangka' => $this->faker->word,
            'no_mesin' => $this->faker->word,
            'no_bpkb' => $this->faker->word,
            'nilai_jaminan' => $this->faker->word,
        ];
    }
}
