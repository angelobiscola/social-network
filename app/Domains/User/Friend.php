<?php

namespace App\Domains\User;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Friend extends Model
{
    use SoftDeletes;

    protected $fillable = ['friend_id'];

    protected $hidden   = [];

    protected $dates    = ['deleted_at'];

    public function Friend()
    {
        return $this->hasOne(User::class,'id','friend_id');
    }
}
