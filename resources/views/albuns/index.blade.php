<x-layout title="Álbuns">

    <div class="container mt-5">
        <div class="row justify-content-md-end">
            <div class="col col-lg-2">
                <a href="/albuns/criar" class="h"><button type="button" class="btn btn-dark"> Criar Novo
                        Álbum</button></a>
            </div>
        </div>
    </div>

    <table class="table table-striped mt-5">
        <thead>
            <tr>
                <th scope="col">Foto da Capa</th>
                <th scope="col">Nome</th>
                <th scope="col">Artista</th>
                <th scope="col">Gênero</th>
                <th scope="col">Preço</th>
                <th scope="col">Músicas</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($albuns as $album)
                <tr>
                    <th class="col-1 align-middle"> <img width="100px" class="rounded mx-auto d-block"
                            src="/images/albuns/{{ $album->foto }} "></th>
                    <td class="align-middle">{{ $album->nome }}</td>
                    <td class="align-middle">{{ $album->artista }}</td>
                    <td class="align-middle">{{ $album->genero }}</td>
                    <td class="align-middle">R$ {{ $album->preco }}</td>
                    <td class="col-1 align-middle"> <a href="/albuns/consulta/{{ $album->id }}"
                            class="h"><button type="button" class="btn btn-dark"> Ver</button></a></td>
                    <td class="col-1 align-middle"> <a href="/albuns/editar/{{ $album->id }}"
                            class="h"><button type="button" class="btn btn-dark"> Editar</button></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</x-layout>
