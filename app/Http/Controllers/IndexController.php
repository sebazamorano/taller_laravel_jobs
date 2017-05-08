<?php

namespace App\Http\Controllers;

use App\Trabajo;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    /**
     * IndexController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home ()
    {
        $trabajos = Trabajo::all();

        return view('welcome', compact('trabajos'));
    }
}
