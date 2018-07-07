<?php

namespace App\Http\Controllers;

use App\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    function index($id){
        $tour = Tour::find($id);
        if(empty($tour))
            abort(404);

        return view('tourRegister',[
            'tour'=>$tour
        ]);
    }

    function register($id,Request $request){
        $request->validate([
           ''
        ]);
    }
}
