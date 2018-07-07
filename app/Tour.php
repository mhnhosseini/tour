<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $table = 'tour';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'media', 'start_time', 'end_time', 'capacity', 'price', 'status'
    ];

    function members()
    {
        $this->hasMany('App/TourMember', 'tour_id', 'id');
    }
}
