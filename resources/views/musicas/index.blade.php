<x-layout title="Todas as Músicas">
<table class="table table-striped mt-5">
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
            <td class="align-middle">{{$musica->nome}}</td>
            <td class="align-middle">{{$musica->duracao}}</td>
            <td class="align-middle col-1">
                <audio controls="controls">
                    <source src="/musicas/{{$musica->path}}" type="audio/mpeg" />
                </audio>
            </td>
        </tr>


    @endforeach
    </tbody>
</table>
</x-layout>
