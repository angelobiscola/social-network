<?php

namespace App\Domains\Comment;

use App\Domains\User\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;

    protected $fillable = ['comment','user_id'];

    protected $hidden   = [];

    protected $dates    = ['deleted_at'];

    public function commentable()
    {
        return $this->morphTo();
    }

    public function Answers()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }
 }
