<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JaminanKendaraan extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'status_jaminan',
        'merk',
        'type_kendaraan',
        'tahun',
        'warna',
        'atas_nama',
        'no_polisi',
        'no_rangka',
        'no_mesin',
        'no_bpkb',
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
