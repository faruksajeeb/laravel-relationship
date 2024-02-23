<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;
    public $fillable = [
        'book_id',
        'title'
    ];

    public function logs()
    {
        return $this->morphMany('App\Models\Log', 'loggable');
    }
}
