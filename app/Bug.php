<?php

namespace App;

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
        return $this->hasMany(Comment::class)->withTrashed();
    }

    public function getDate()
    {
        return $this->created_at->formatLocalized('%A %d %B %Y');
    }

    public function getDiffDate()
    {
        return $this->created_at->diffForHumans();
    }
}
