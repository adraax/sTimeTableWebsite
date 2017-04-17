<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'bug_id', 'content', 'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function bug()
    {
        return $this->belongsTo(Bug::class);
    }

    public function getDiffDate()
    {
        return $this->created_at->diffForHumans();
    }
}
