<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

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
