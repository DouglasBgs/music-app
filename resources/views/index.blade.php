<!doctype html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bem Vindo!</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <x-navbar></x-navbar>
    <header class="masthead text-white text-center "
        style="background:url('https://img.freepik.com/vetores-gratis/ondas-sonoras-com-efeito-de-meio-tom-equalizador-de-musica-para-festa-em-clube-pub-concerto-pulso-musical_185386-779.jpg?w=2000')no-repeat center center;background-size:cover; padding-top: 25%">

    </header>
    <section class="testimonials text-center bg-light pb-5 pt-5">
        <div class="container">
            <h2 class="mt-5 mb-5">Bem vindo ao Music App</h2>
            <form class="row justify-content-center pb-5 pt-5" method="GET" action="/">
                <div class="col-5">
                    <input type="text" name="search" class="form-control align-self-center" placeholder="Pesquisar Álbum"
                        value="{{ $search }}">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-dark">Pesquisar</button></a>
                </div>
            </form>
        </div>
    </section>

    <section>
        <div class="container " style="margin-bottom: 10%">

            @if ($search)
                <h2 class="pt-5 pb-5">Buscando por: <b>{{ $search }}</b></h2>
            @endif
            @if (count($albuns) != 0)
                <table class="table table-striped mt-5">
                    <thead>
                        <tr>
                            <th scope="col">Foto da capa</th>
                            <th scope="col">Nome do álbum</th>
                            <th scope="col">Artista</th>
                            <th scope="col">Gênero</th>
                            <th scope="col">Preço</th>
                            <th scope="col">Músicas</th>
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
                                        class="h"><button type="button" class="btn btn-dark">
                                            Ver</button></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @elseif($search)
                <h3>Nenhum resultado foi encontrado</h3>
            @endif
        </div>
    </section>
    <x-footer></x-footer>

</body>

</html>
