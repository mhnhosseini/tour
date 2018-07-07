<?php

namespace App\Http\Controllers;

use App\Tour;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return Response()->json(Tour::paginate(5));
        return view('home',[
            'tours'=>Tour::paginate(5)
        ]);
    }


}
