<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public $fillable = [
        'title',
        'content',
        'resource',
        'link',
        'avatar'
    ];
}
