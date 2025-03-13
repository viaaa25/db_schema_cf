<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\customer;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'STATUS_RECORD' => $this->faker->word,
            'CUSTOMER_CODE' => $this->faker->word,
            'CUSTOMER_NAME' => $this->faker->word,
            'TITLE' => $this->faker->word,
            'CUST_ADDRESS_1' => $this->faker->word,
            'CUST_ADDRESS_2' => $this->faker->word,
            'CUST_ADDRESS_3' => $this->faker->word,
            'PHONE_NUMBER_1' => $this->faker->word,
            'PHONE_NUMBER_2' => $this->faker->word,
            'FAX_NUMBER' => $this->faker->word,
            'INSTITUT_CODE' => $this->faker->word,
            'SHORT_NAME_CUST' => $this->faker->word,
            'BRANCH' => $this->faker->word,
            'FLAG_PARENT_CUST' => $this->faker->word,
            'PARENT_NUMBER' => $this->faker->word,
            'AO_CODE' => $this->faker->word,
            'INSDUSTRY_CODE' => $this->faker->word,
            'AREA_CODE' => $this->faker->word,
            'NPWP' => $this->faker->word,
            'BEGIN_DATE_CUST' => $this->faker->date(),
            'AUTORIZER' => $this->faker->word,
            'OPERATOR_ID' => $this->faker->word,
            'DATE_EDIT' => $this->faker->date(),
            'AGAMA' => $this->faker->word,
            'PEKERJAAN' => $this->faker->word,
            'JENIS_KELAMIN' => $this->faker->word,
            'BIRTH_DATE' => $this->faker->date(),
            'ID_CARD_NUMBER' => $this->faker->word,
            'ID_EXPIRED_DATE' => $this->faker->date(),
            'COUNTRY' => $this->faker->word,
            'CONTACT_PERSON' => $this->faker->word,
            'CUSTOMER_TYPE' => $this->faker->word,
            'PPH_TYPE' => $this->faker->word,
            'GOL_PEMILIK' => $this->faker->word,
        ];
    }
}
