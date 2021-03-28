<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APp\User;
use App\Item;
use App\Image;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller

{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // 
    public function index()
    {
        $item = Item::where('user_id', Auth::user()->id)->count();
        $image = Image::where('user_id', Auth::user()->id)->count();
        return view('home', compact(['item', 'image']));
    }
}
