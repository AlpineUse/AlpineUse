<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = [
        'type',

        'plugin_id',

        'title',
        'body',
        'url',
        
        'status'
    ];
}
