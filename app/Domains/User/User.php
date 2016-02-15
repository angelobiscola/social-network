<?php

namespace App\Domains\User;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['first_name','last_name' ,'email', 'password','player'];


    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = ['deleted_at'];


    public function Profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function Groups()
    {
        return $this->hasMany(Group::class);
    }

    public function Friends()
    {
        return $this->hasMany(Friend::class);
    }

    public function Posts()
    {
        return $this->hasMany(Post::class);
    }

    /*
     public function Notification()
     {
         return $this->hasOne(Notification::class);
     }

     public function Inbox()
     {
         return $this->hasOne(Inbox::class);
     }


     public function Matches()
     {
         return $this->hasMany(Match::class);
     }
     */


}
