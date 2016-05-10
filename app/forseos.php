<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class forseos extends Model
{
    protected $fillable=[
        'staffid',
        'authornames',
        'forarea',
        'seo',
        'comments'
    ];
}
