<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Realisation extends Model
{
    protected $fillable = [
        'title', 'texte',
    ];

    public function images()
    {
        return $this->belongsToMany('App\Image');
    }
}
