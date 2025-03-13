<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CrProspectDocument extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'PATH',
        'SUBMIT_DATE',
        'INDEX_NUM',
        'VALID_CHECK',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'SUBMIT_DATE' => 'date',
    ];

    public function crProspects()
    {
        return $this->hasMany(CrProspect::class);
    }
}
