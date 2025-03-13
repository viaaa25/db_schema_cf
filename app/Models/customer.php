<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
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
        'CUSTOMER_NAME',
        'TITLE',
        'CUST_ADDRESS_1',
        'CUST_ADDRESS_2',
        'CUST_ADDRESS_3',
        'PHONE_NUMBER_1',
        'PHONE_NUMBER_2',
        'FAX_NUMBER',
        'INSTITUT_CODE',
        'SHORT_NAME_CUST',
        'BRANCH',
        'FLAG_PARENT_CUST',
        'PARENT_NUMBER',
        'AO_CODE',
        'INSDUSTRY_CODE',
        'AREA_CODE',
        'NPWP',
        'BEGIN_DATE_CUST',
        'AUTORIZER',
        'OPERATOR_ID',
        'DATE_EDIT',
        'AGAMA',
        'PEKERJAAN',
        'JENIS_KELAMIN',
        'BIRTH_DATE',
        'ID_CARD_NUMBER',
        'ID_EXPIRED_DATE',
        'COUNTRY',
        'CONTACT_PERSON',
        'CUSTOMER_TYPE',
        'PPH_TYPE',
        'GOL_PEMILIK',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'BEGIN_DATE_CUST' => 'date',
        'DATE_EDIT' => 'date',
        'BIRTH_DATE' => 'date',
        'ID_EXPIRED_DATE' => 'date',
    ];
}
