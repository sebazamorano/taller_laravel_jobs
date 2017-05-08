<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trabajos = auth()->user()->trabajos();

        if (request()->has('sort')) {
            $trabajos = $trabajos
                ->orderBy('titulo', request()->get('sort'));
        }

        $trabajos = $trabajos->paginate(5);
        return view('admin.home', compact('trabajos'));
    }
}
