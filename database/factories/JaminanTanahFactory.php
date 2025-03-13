<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\jaminan_tanah;

class JaminanTanahFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = JaminanTanah::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'status_jaminan' => $this->faker->word,
            'no_sertifikat' => $this->faker->word,
            'status_kepemilikan' => $this->faker->word,
            'imb' => $this->faker->word,
            'luas_tanah' => $this->faker->word,
            'luas_bangunan' => $this->faker->word,
            'lokasi' => $this->faker->word,
            'desa' => $this->faker->word,
            'kecamatan' => $this->faker->word,
            'kota' => $this->faker->word,
            'atas_nama' => $this->faker->word,
            'nilai_jaminan' => $this->faker->word,
        ];
    }
}
