<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Texte extends Model
{
    protected $fillable = [
        'title', 'texte',
    ];
}
