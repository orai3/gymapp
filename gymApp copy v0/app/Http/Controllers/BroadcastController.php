<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BroadcastController extends Controller
{
    public function index()
    {
        return view('broadcasts.index', [
            'userId' => auth()->id()
        ]);
    }
}
