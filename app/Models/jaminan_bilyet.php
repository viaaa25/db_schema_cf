<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JaminanBilyet extends Model
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
        'no_bilyet',
        'tanggal_valuta',
        'jangka_waktu',
        'nominal',
        'atas_nama',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'tanggal_valuta' => 'datetime',
    ];

    public function crCcollateral()
    {
        return $this->belongsTo(CrCcollateral::class);
    }
}
