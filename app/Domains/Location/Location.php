<?php

namespace App\Domains\Location;

use App\Domains\User\Profile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Location extends Model
{
    use SoftDeletes;

    protected $fillable = ['address','number','city','zip_code','district','state','state_abbr'];

    protected $hidden   = [];

    protected $dates    = ['deleted_at'];

    public function locationable()
    {
        return $this->morphTo();
    }

    public function Profile()
    {
        return $this->belongsTo(Profile::class,'locationable_id');
    }
 }
