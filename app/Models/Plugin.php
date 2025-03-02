<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plugin extends Model
{
    public $timestamps = true;

    protected $fillable = [
        'name',
        'desc',
        'body',
        'url',
        'status'
    ];
}
