<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\cr_prospect_document;

class CrProspectDocumentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CrProspectDocument::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'PATH' => $this->faker->word,
            'SUBMIT_DATE' => $this->faker->date(),
            'INDEX_NUM' => $this->faker->word,
            'VALID_CHECK' => $this->faker->word,
        ];
    }
}
