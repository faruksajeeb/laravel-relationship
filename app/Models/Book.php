<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    public $fillable = [
        'author_id',
        'title'
    ];
    function chapters() {
        return $this->hasMany('App\Models\Chapter');
    }

    function author() {
        return $this->belongsTo('App\Models\Author');
    }

    public function logs()
    {
        return $this->morphMany('App\Models\Log', 'loggable');
    }
}
