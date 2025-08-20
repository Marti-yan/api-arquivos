<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Arquivo extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'rptdt',
        'tckrsymb',
        'mktnm',
        'sctyctgynm',
        'isin',
        'crpnnm',
        'file_hash',
        'file_name' 
    ];

}
