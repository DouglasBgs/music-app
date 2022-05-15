<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlbunsController extends Controller
{
    public function index(Request $request)
    {
        $albuns =  [
            'Quenn',
            'queenn2',
            'quennn3'
        ];
        return view('albuns.index', compact('albuns'));
    }

    public function create()
    {
        return view('albuns.create');
    }
}
