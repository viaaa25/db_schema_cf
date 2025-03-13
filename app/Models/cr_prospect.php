<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CrProspect extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'NAME',
        'VISIT_DATE',
        'TIME_INPUT',
        'OFFICER_ID',
        'ID_NUMBER',
        'KK_NUMBER',
        'ADDRESS',
        'PHONE',
        'SECTOR',
        'PCT',
        'RESULT',
        'PATH',
        'COL_TYPE',
        'COL_NUMBER',
        'COL_VAL',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'VISIT_DATE' => 'datetime',
        'TIME_INPUT' => 'datetime',
        'PCT' => 'decimal:2',
        'COL_VAL' => 'decimal:2',
    ];

    public function crProspectDocuments()
    {
        return $this->hasMany(CrProspectDocument::class);
    }
}
