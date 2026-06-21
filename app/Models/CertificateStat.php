<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CertificateStat extends Model
{
    protected $fillable = [
        'label',
        'value',
        'urutan',
    ];
}