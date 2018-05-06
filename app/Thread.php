<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $fillable = [
        'user_id', 'title', 'body'
    ];

    public function path()
    {
        return '/threads/' . $this->getKey();
    }

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function addReply(array $reply)
    {
        $this->replies()->create($reply);
    }
}
