<?php

namespace App\Domains\Participant;

use App\Domains\User\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Participant extends Model
{
    use SoftDeletes;

    protected $fillable = ['user_id'];

    protected $hidden   = [];

    protected $dates    = ['deleted_at'];

    public function participantable()
    {
        return $this->morphTo();
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
