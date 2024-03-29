<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public $fillable = [
        'name'
    ];
    function categories() {
        return $this->belongsToMany('App\Models\Category');
    }

    public function logs()
    {
        return $this->morphMany('App\Models\Log', 'loggable');
    }
}
