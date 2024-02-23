<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    public $fillable = [
        'name'
    ];

    function books() {
        return $this->hasMany('App\Models\Book');
    }

    public function chapters()
    {
        return $this->hasManyThrough('App\Models\Chapter', 'App\Models\Book');
    }

    public function logs()
    {
        return $this->morphMany('App\Models\Log', 'loggable');
    }
}
