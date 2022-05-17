<?php

namespace App\Http\Controllers;

use App\Models\Albuns;
use App\Models\Musicas;
use Illuminate\Http\Request;
use App\Providers\ImageService;

class AlbunsController extends Controller
{
    public function index()
    {
        $albuns = Albuns::all();
        return view('albuns.index', compact('albuns'));
    }

    public function create()
    {
        return view('albuns.create');
    }

    public function show(Request $request)
    {
        $id = $request->id;
        return view('albuns.show', ['album' => Albuns::findOrFail($id), 'musicas' => Musicas::all()->where('AlbumId', $id)]);
    }

    public function store(Request $request)
    {


        $Albuns = new Albuns();


        $Albuns->nome = $request->input('nomeAlbum');
        $Albuns->artista = $request->input('artista');
        $Albuns->genero = $request->input('genero');
        $Albuns->preco = $request->input('preco');


        $requestImage = $request->image;
        $extension = $requestImage->extension();
        $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
        $request->image->move(public_path('images/albuns'), $imageName);

        $Albuns->foto = $imageName;



        $Albuns->save();
        $NewAlbumId =  str($Albuns->getAttribute('id'));

        return redirect('/albuns/consulta/' . $NewAlbumId);
    }

    public function edit(Request $request)
    {

        $album = Albuns::findOrFail($request->id);

        return view('albuns.edit', compact('album'));
    }

    public function update(Request $request)
    {

        Albuns::findOrFail($request->id)->update($request->all());

        return redirect('/albuns');
    }
}
