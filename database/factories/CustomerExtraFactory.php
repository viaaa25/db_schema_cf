<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\customer_extra;

class CustomerExtraFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CustomerExtra::class;

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
            'NAME_1' => $this->faker->word,
            'NAME_2' => $this->faker->word,
            'NAME_3' => $this->faker->word,
            'NAME_4' => $this->faker->word,
            'ADDRESS_1' => $this->faker->word,
            'ADDRESS_2' => $this->faker->word,
            'ADDRESS_EXT_1' => $this->faker->word,
            'ADDRESS_EXT_2' => $this->faker->word,
            'ADDRESS_3' => $this->faker->word,
            'ADDRESS_4' => $this->faker->word,
            'CITY' => $this->faker->word,
            'ZIP_CODE' => $this->faker->word,
            'PROVINCE' => $this->faker->word,
            'RT_RW' => $this->faker->word,
            'AREA_CODE_PHONE_1' => $this->faker->word,
            'PHONE_1' => $this->faker->word,
            'AREA_CODE_PHONE_2' => $this->faker->word,
            'PHONE_2' => $this->faker->word,
            'AREA_CODE_PHONE_3' => $this->faker->word,
            'PHONE_3' => $this->faker->word,
            'CELLULER_1' => $this->faker->word,
            'CELLULER_2' => $this->faker->word,
            'CELLULER_3' => $this->faker->word,
            'AREA_CODE_FAX_1' => $this->faker->word,
            'FAX_NUMBER_1' => $this->faker->word,
            'AREA_CODE_FAX_2' => $this->faker->word,
            'FAX_NUMBER_2' => $this->faker->word,
            'AREA_CODE_FAX_3' => $this->faker->word,
            'FAX_NUMBER_3' => $this->faker->word,
            'SUMBER_PENGHASILAN_1' => $this->faker->word,
            'SUMBER_DANA' => $this->faker->word,
            'TUJUAN_GUNA_DANA' => $this->faker->word,
            'IBU_KANDUNG' => $this->faker->word,
            'PASANGAN' => $this->faker->word,
            'TEMPAT_LAHIR' => $this->faker->word,
            'TGL_LAHIR' => $this->faker->word,
            'NO_ID' => $this->faker->word,
            'SUMBER_PENGHASILAN_2' => $this->faker->word,
            'PEKERJAAN' => $this->faker->word,
            'ALAMAT_1' => $this->faker->word,
            'ALAMAT_2' => $this->faker->word,
            'KOTA' => $this->faker->word,
            'NAMA_PENJAMIN' => $this->faker->word,
            'ALAMAT_PENJAMIN_1' => $this->faker->word,
            'ALAMAT_PENJAMIN_2' => $this->faker->word,
            'KOTA_PENJAMIN' => $this->faker->word,
            'PHONE_PENJAMIN' => $this->faker->word,
            'HUB_DEBITUR' => $this->faker->word,
            'DATE_INPUT' => $this->faker->date(),
            'TIME_INPUT' => $this->faker->word,
            'USER_INPUT' => $this->faker->word,
            'USER_OTOR' => $this->faker->word,
            'TIME_OTOR' => $this->faker->word,
            'DATE_LAST_UPDATE' => $this->faker->date(),
        ];
    }
}
