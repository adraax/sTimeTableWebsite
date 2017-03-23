<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Bug extends Model
{
    protected $fillable = [
        'title', 'body', 'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function getDate()
    {
        Carbon::setLocale('fr');
        return Carbon::now()->formatLocalized('%A %d %B %Y');
    }
}
