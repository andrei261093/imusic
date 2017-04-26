<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
     protected $fillable = [
        'videoId', 'userID', 'title',
    ];
}
