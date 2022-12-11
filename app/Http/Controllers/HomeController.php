<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\KeyController;
use App\Models\Key;

class HomeController extends Controller
{

    public function index()
    {
        $key = Key::all();
        return view('home.index', compact('key'));
    }
}
