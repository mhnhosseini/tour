<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourMember extends Model
{
    protected $table = 'member';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'member_id', 'tour_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    function member()
    {
        $this->hasOne('App/member', 'id','member_id');
    }

    function tour()
    {
        $this->hasOne('App/Tour', 'id', 'tour_id');
    }
}
