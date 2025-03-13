<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JaminanTanah extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'status_jaminan',
        'no_sertifikat',
        'status_kepemilikan',
        'imb',
        'luas_tanah',
        'luas_bangunan',
        'lokasi',
        'desa',
        'kecamatan',
        'kota',
        'atas_nama',
        'nilai_jaminan',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];

    public function crCcollateral()
    {
        return $this->belongsTo(CrCcollateral::class);
    }
}
