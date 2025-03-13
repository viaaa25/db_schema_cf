<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\cr_prospect;

class CrProspectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CrProspect::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'NAME' => $this->faker->word,
            'VISIT_DATE' => $this->faker->dateTime(),
            'TIME_INPUT' => $this->faker->dateTime(),
            'OFFICER_ID' => $this->faker->word,
            'ID_NUMBER' => $this->faker->word,
            'KK_NUMBER' => $this->faker->word,
            'ADDRESS' => $this->faker->word,
            'PHONE' => $this->faker->word,
            'SECTOR' => $this->faker->word,
            'PCT' => $this->faker->randomFloat(2, 0, 9999.99),
            'RESULT' => $this->faker->word,
            'PATH' => $this->faker->word,
            'COL_TYPE' => $this->faker->word,
            'COL_NUMBER' => $this->faker->word,
            'COL_VAL' => $this->faker->randomFloat(2, 0, 999999999999999999.99),
        ];
    }
}
