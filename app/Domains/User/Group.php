<?php

namespace App\Domains\User;

use App\Domains\Participant\Participant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Group extends Model
{
    use SoftDeletes;

    protected $fillable = ['name'];

    protected $hidden   = [];

    protected $dates    = ['deleted_at'];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Participants()
    {
        return $this->morphMany(Participant::class, 'participantable');
    }
}
