<x-layout title="Álbum: {{ $album->nome }}">
    <div class="container mt-5">
        <div class="row justify-content-md-end">
            <div class="col col-lg-2">
                <a href="/musicas/adicionar/{{ $album->id }}" class="h"><button type="button"
                        class="btn btn-dark"> Adicionar músicas</button></a>
            </div>
        </div>
    </div>
    <div class="row featurette mt-5">
        <div class="col-md-5">
            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                src="/images/albuns/{{ $album->foto }}" width="500">
        </div>
        <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1"><b>Artista:</b> {{ $album->artista }} </h2>
            <p class="lead"> <b>Gênero:</b> {{ $album->genero }}</p>
            <p class="lead"><b>Valor:</b> R$ {{ $album->preco }}</p>
        </div>

        <div class="container mt-5">
            <h1>Músicas do álbum</h1>
        </div>
        <table class="table table-striped mt-5 mb-5">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Duração</th>
                    <th scope="col">Ouvir</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($musicas as $musica)
                    <tr>
                        <td class="align-middle">{{ $musica->nome }}</td>
                        <td class="align-middle col-3">{{ $musica->duracao }}</td>
                        <td class="align-middle col-1">
                            <audio controls="controls">
                                <source src="/musicas/{{ $musica->path }}" type="audio/mpeg" />
                            </audio>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-layout>
