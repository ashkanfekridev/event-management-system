<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home',['events'=>Event::all()]);
    }
}
