<?php

namespace App\Http\Controllers;

use App\Models\Albuns;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    function index()
    {
        $search = request('search');
        if ($search) {
            $albuns = Albuns::where('nome', 'like', '%' . $search . '%')
                ->orWhere('artista', 'LIKE', "%{$search}%")
                ->orWhere('genero', 'LIKE', "%{$search}%")->get();
        } else {
            $albuns = Albuns::all();
        }

        return view('index', ['albuns' => $albuns, 'search' => $search]);
    }
}
