<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CustomerExtra extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'STATUS_RECORD',
        'CUSTOMER_CODE',
        'NAME_1',
        'NAME_2',
        'NAME_3',
        'NAME_4',
        'ADDRESS_1',
        'ADDRESS_2',
        'ADDRESS_EXT_1',
        'ADDRESS_EXT_2',
        'ADDRESS_3',
        'ADDRESS_4',
        'CITY',
        'ZIP_CODE',
        'PROVINCE',
        'RT_RW',
        'AREA_CODE_PHONE_1',
        'PHONE_1',
        'AREA_CODE_PHONE_2',
        'PHONE_2',
        'AREA_CODE_PHONE_3',
        'PHONE_3',
        'CELLULER_1',
        'CELLULER_2',
        'CELLULER_3',
        'AREA_CODE_FAX_1',
        'FAX_NUMBER_1',
        'AREA_CODE_FAX_2',
        'FAX_NUMBER_2',
        'AREA_CODE_FAX_3',
        'FAX_NUMBER_3',
        'SUMBER_PENGHASILAN_1',
        'SUMBER_DANA',
        'TUJUAN_GUNA_DANA',
        'IBU_KANDUNG',
        'PASANGAN',
        'TEMPAT_LAHIR',
        'TGL_LAHIR',
        'NO_ID',
        'SUMBER_PENGHASILAN_2',
        'PEKERJAAN',
        'ALAMAT_1',
        'ALAMAT_2',
        'KOTA',
        'NAMA_PENJAMIN',
        'ALAMAT_PENJAMIN_1',
        'ALAMAT_PENJAMIN_2',
        'KOTA_PENJAMIN',
        'PHONE_PENJAMIN',
        'HUB_DEBITUR',
        'DATE_INPUT',
        'TIME_INPUT',
        'USER_INPUT',
        'USER_OTOR',
        'TIME_OTOR',
        'DATE_LAST_UPDATE',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'DATE_INPUT' => 'date',
        'DATE_LAST_UPDATE' => 'date',
    ];
}
