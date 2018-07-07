<?php

namespace App\Http\Controllers;

use App\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    function index($id){
//        return Tour::find($id);
        return view('tourRegister',[
            'tour'=>Tour::find($id)
        ]);
    }
}
