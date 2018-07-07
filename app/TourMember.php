<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourMember extends Model
{
    protected $table = 'member_tour';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'member_id', 'tour_id'
    ];


    function member()
    {
        $this->hasOne('App\Member', 'id','member_id');
    }

    function tour()
    {
        $this->hasOne('App\Tour', 'id', 'tour_id');
    }
}
