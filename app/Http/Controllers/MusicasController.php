<?php

namespace App\Http\Controllers;

use App\Models\Musicas;
use Illuminate\Http\Request;
use wapmorgan\Mp3Info\Mp3Info;

class MusicasController extends Controller
{
    public function index()
    {

        $musicas = Musicas::all();

        return view('musicas.index', compact('musicas'));
    }

    public  function  create(Request $request)
    {
        $albumId = $request->albumId;

        return view('musicas.create', compact('albumId'));
    }

    public function store(Request $request)
    {
        $Musica = new Musicas();

        $Musica->nome = $request->input('nomeMusica');
        $Musica->AlbumId = $request->albumId;
        $requestAudio = $request->audio;

        $audio = new Mp3Info($requestAudio, true);
        $Musica->duracao = date("H:i:s.u", $audio->duration);
        $extension = $requestAudio->extension();
        $AudioName = md5($requestAudio->getClientOriginalName() . strtotime("now")) . "." . $extension;
        $request->audio->move(public_path('musicas/'), $AudioName);

        $Musica->path = $AudioName;

        $Musica->save();

        return redirect('/albuns/consulta/' . $request->albumId);
    }
}
