<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Bug extends Model
{
    protected $fillable = [
        'title', 'description', 'user_id', 'status'
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
        setlocale(LC_TIME, 'fr_FR.UTF-8');
        //Carbon::setLocale('fr');
        return Carbon::now()->formatLocalized('%A %d %B %Y');
    }

    public function getDiffDate()
    {
        Carbon::setLocale('fr');
        return $this->created_at->diffForHumans();
    }
}
