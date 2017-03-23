<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'bug_id', 'body', 'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getDiffDate()
    {
        Carbon::setLocale('fr');
        return $this->created_at->diffForHumans();
    }
}
