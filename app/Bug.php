<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bug extends Model
{
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function bugs()
    {
        return $this->hasMany(Bug::class);
    }
}
