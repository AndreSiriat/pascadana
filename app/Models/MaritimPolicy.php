<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaritimPolicy extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'category',
        'document_number',
        'document_year',
        'source_name',
        'source_url',
        'summary',
        'status',
    ];
}