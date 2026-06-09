<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Management extends Model
{
    protected $table = 'management';

    protected $fillable = [
        'nama',
        'jabatan',
        'group',
        'foto',
        'urutan',
        'status',
    ];
}