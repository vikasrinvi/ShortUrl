<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \AshAllenDesign\ShortURL\Models\ShortURL;

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
    public function index()
    {
        $urls = ShortURL::latest()->paginate(5);
        return view('home', compact('urls'));
    }
}
