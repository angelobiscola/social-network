<?php

namespace App\Domains\User;

use App\Domains\Comment\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'body','slug'];

    protected $hidden   = [];

    protected $dates    = ['deleted_at'];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
